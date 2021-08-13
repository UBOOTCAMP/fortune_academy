<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;

class CreateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Roles Define';

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
        foreach ($this->getAllRoles() as $roles) {
            Role::firstOrCreate([
                'name' => $roles['name'],
            ]);
        }
    }

    private function getAllRoles()
    {
        return [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Students',
            ],
            [
                'name' => 'Instructor',
            ],
            [
                'name' => 'Sales',
            ]
        ];
    }
}
