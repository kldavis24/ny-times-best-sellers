<?php

namespace App\Policies;

use App\Models\User;
use App\Users\Enums\Permission;

class ListPolicy
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
