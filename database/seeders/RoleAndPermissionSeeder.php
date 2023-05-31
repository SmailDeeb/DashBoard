<?php

namespace Database\Seeders;

use App\Enums\PermissionsEnum;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permission::create(['name' => 'create-users']);
        // Permission::create(['name' => 'edit-users']);
        // Permission::create(['name' => 'delete-users']);

        // Permission::create(['name' => 'create-blog-posts']);
        // Permission::create(['name' => 'edit-blog-posts']);
        // Permission::create(['name' => 'delete-blog-posts']);


        // Permission::create(['name' => 'delete-blog-posts']);

        foreach (PermissionsEnum::cases() as $permission) {
            Permission::create(['name' => $permission->value]);
        }

        Role::create(['name' => 'Superadmin']);

        $moderatorRole = Role::create(['name' => 'Moderator']);
        $warehouseGuardRole = Role::create(['name' => 'Warehouse_Guard']);
        $employeeRole = Role::create(['name' => 'Employee']);

        $moderatorRole->givePermissionTo([
            PermissionsEnum::EDIT_ADMIN->value,
            PermissionsEnum::SHOW_ADMIN->value,
            PermissionsEnum::DELETE_ADMIN->value,
            // 'edit-users',
            // 'delete-users',
            // 'create-blog-posts',
            // 'edit-blog-posts',
            // 'delete-blog-posts',
        ]);

        $warehouseGuardRole->givePermissionTo([
            PermissionsEnum::EDIT_ADMIN->value,
            PermissionsEnum::SHOW_ADMIN->value,
            // 'create-blog-posts',
            // 'edit-blog-posts',
            // 'delete-blog-posts',
        ]);

        $employeeRole->givePermissionTo([
            PermissionsEnum::SHOW_ADMIN->value,
            // 'create-blog-posts',
            // 'edit-blog-posts',
            // 'delete-blog-posts',
        ]);

        $superadmin = Admin::find(1);
        $superadmin->assignRole('Superadmin');
    }
}
