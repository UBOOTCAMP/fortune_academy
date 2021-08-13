<?php

namespace App\Console\Commands;

use App\Models\Permission;
use App\Providers\RoleProvider;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class SyncRolePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach ($this->getAllPermissions() as $permission) {
            Permission::firstOrCreate([
                'name' => $permission['name'],
                'slug' => $permission['slug']
            ]);
        }
        Cache::forget('roles');
        RoleProvider::define();
    }

    private function getAllPermissions()
    {
        return [
            [
                'name' => 'Category',
                'slug' => 'categories'
            ],
            [
                'name' => 'Sub-Category',
                'slug' => 'sub-categories'
            ],
            [
                'name' => 'Users',
                'slug' => 'users'
            ],
            [
                'name' => 'Classes',
                'slug' => 'classes'
            ],
            [
                'name' => 'Students',
                'slug' => 'students'
            ],
            [
                'name' => 'Instructors',
                'slug' => 'instructors'
            ],
            [
                'name' => 'Roles',
                'slug' => 'roles'
            ],
            [
                'name' => 'Permissions',
                'slug' => 'permissions'
            ],
            [
                'name' => 'Promo Code',
                'slug' => 'promo_codes'
            ]
        ];
    }
}
