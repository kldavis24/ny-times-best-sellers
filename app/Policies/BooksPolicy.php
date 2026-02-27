<?php

namespace App\Policies;

use App\Models\User;
use App\Users\Enums\Permission;

class BooksPolicy
{
    public function viewBooks(User $user): bool
    {
        return $user->isAdmin() ?: $user->can(Permission::ViewAllBooks);
    }

    public function viewBooksByList(User $user): bool
    {
        if ($this->viewBooks($user)) {
            return true;
        }

        return $user->can(Permission::ViewBooksByList);
    }

    public function viewBooksByDate(User $user): bool
    {
        if ($this->viewBooks($user)) {
            return true;
        }

        return $user->can(Permission::ViewBooksByDate);
    }

    public function viewBooksByListAndDate(User $user): bool
    {
        if ($this->viewBooks($user)) {
            return true;
        }

        return $user->can(Permission::ViewBooksByListAndDate);
    }
}
