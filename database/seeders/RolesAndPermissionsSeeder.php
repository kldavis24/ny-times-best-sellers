<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Users\Enums\Role;
use App\Users\Enums\Permission;
use Spatie\Permission\Models\Role as SpatieRole;
use Spatie\Permission\Models\Permission as SpatiePermission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $permissionModels = [];

        foreach (Permission::cases() as $permission) {
            $permissionModels[$permission->value] = SpatiePermission::firstOrCreate([
                'name' => $permission->value,
                'guard_name' => 'web',
            ]);
        }

        foreach (Role::cases() as $roleEnum) {
            $roleModel = SpatieRole::firstOrCreate([
                'name' => $roleEnum->value,
                'guard_name' => 'web',
            ]);

            $permissionNames = array_map(
                fn(Permission $p) => $p->value,
                $roleEnum->permissions()
            );

            $roleModel->syncPermissions($permissionNames);
        }

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
