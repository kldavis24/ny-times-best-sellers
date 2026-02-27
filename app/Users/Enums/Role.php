<?php

namespace App\Users\Enums;

use App\Users\Enums\Permission;
use Illuminate\Support\Collection;

enum Role: string
{
    case Admin = 'admin';
    case Viewer = 'viewer';

    /** @return list<Permission> */
    public function permissions(): array
    {
        return match ($this) {
            self::Admin => Permission::cases(),
            self::Viewer => [
                Permission::ViewAllBooks,
                Permission::ViewAllLists,
                Permission::ViewBooksByDate,
                Permission::ViewBooksByList,
                Permission::ViewListNames,
            ],
        };
    }

    /** @return Collection<int|string> */
    public static function values(): Collection
    {
        return collect(self::cases())->map->value;
    }
}
