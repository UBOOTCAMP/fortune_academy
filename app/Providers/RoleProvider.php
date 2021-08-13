<?php

namespace App\Providers;

use App\Models\Permission;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;

class RoleProvider
{
    public static function define()
    {
        Gate::before(function ($admin) {
            if ($admin->isSuperAdmin()) {
                return true;
            }
        });

        try {
            if (Schema::hasTable('permissions')) {
                $permissions = self::getPermissions();
                foreach ($permissions as $permission) {
                    Gate::define($permission->slug, function ($admin) use ($permission) {
                        return $admin->hasRole($permission->roles);
                    });
                }
            }
        } catch (Exception $e) {
        }
    }

    protected static function getPermissions()
    {
        try {
            return Cache::rememberForever('roles', function () {
                return Permission::with('roles')->get();
            });
        } catch (Exception $e) {
            return [];
        }
    }
}
