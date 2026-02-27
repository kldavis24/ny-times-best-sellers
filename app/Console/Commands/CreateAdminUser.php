<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Users\Enums\Role;
use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the initial "admin" user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /** @var User $user */
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => 'password',
        ]);

        $user->assignRole(Role::Admin);
    }
}
