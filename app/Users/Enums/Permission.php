<?php

namespace App\Users\Enums;

use Illuminate\Support\Collection;

enum Permission: string
{
    case ViewAllLists = 'view_all_lists';
    case ViewListNames = 'view_list_names';
    case ViewAllBooks = 'view_all_books';
    case ViewBooksByDate = 'view_books_by_date';
    case ViewBooksByList = 'view_books_by_list';
    case ViewBooksByListAndDate = 'view_books_by_list_and_date';

    case CreateUsers = 'create_users';
    case UpdateUsers = 'update_users';
    case DeleteUsers = 'delete_users';

    /** @return Collection<int|string> */
    public static function values(): Collection
    {
        return collect(self::cases())->map->value;
    }
}
