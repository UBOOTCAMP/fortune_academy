<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        foreach ($this->permissionLookupTable() as $key => $value) {
            if (Str::contains($request->route()->getName(), $key)) {
                if (Gate::allows($value)) break;
                abort(403);
            }
        }
        return $next($request);
    }

    protected function permissionLookupTable(): array
    {
        return [
            'classes' => 'classes',
            'categories' => 'categories',
            'sub-categories' => 'sub-categories',
            'users' => 'users',
            'students' => 'students',
            'instructors' => 'instructors'
        ];
    }
}
