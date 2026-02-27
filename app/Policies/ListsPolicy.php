<?php

namespace App\Policies;

use App\Models\User;
use App\Users\Enums\Permission;
use App\Users\Enums\Role;

class ListsPolicy
{
    public function viewLists(User $user): bool
    {
        return $user->isAdmin() ?: $user->can(Permission::ViewAllLists);
    }

    public function viewListNames(User $user): bool
    {
        if ($this->viewLists($user)) {
            return true;
        }

        return $user->can(Permission::ViewListNames);
    }
}
