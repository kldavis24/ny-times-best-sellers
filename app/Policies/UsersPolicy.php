<?php

namespace App\Policies;

use App\Models\User;
use App\Users\Enums\Permission;
use App\Users\Enums\Role;

class UsersPolicy
{
    public function viewUsers(User $user): bool
    {
        if ($user->isAdmin()) {
            return true;
        }

        return $user->hasAnyDirectPermission([
            Permission::CreateUsers,
            Permission::UpdateUsers,
            Permission::DeleteUsers,
        ]);
    }

    public function createUser(User $user): bool
    {
        return $user->isAdmin() ?: $user->can(Permission::CreateUsers);
    }

    public function updateUser(User $user): bool
    {
        return $user->isAdmin() ?: $user->can(Permission::UpdateUsers);
    }

    public function deleteUser(User $user): bool
    {
        return $user->isAdmin() ?: $user->can(Permission::DeleteUsers);
    }
}
