<?php

namespace Database\Seeders;

use App\Enums\PermissionsEnum;
use App\Models\Admin;
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
        foreach (PermissionsEnum::cases() as $permission) {
            Permission::create(['name' => $permission->value]);
        }

        Role::create(['name' => 'Superadmin']);

        $moderatorRole = Role::create(['name' => 'Moderator']);
        $monitorRole = Role::create(['name' => 'Monitor']);
        $employeeRole = Role::create(['name' => 'Employee']);

        $moderatorRole->givePermissionTo([
            PermissionsEnum::EDIT_ADMIN->value,
            PermissionsEnum::SHOW_ADMIN->value,
            PermissionsEnum::DELETE_ADMIN->value,
            PermissionsEnum::VIEW_ANALYSIS->value,
            PermissionsEnum::VIEW_REPORTS->value,
        ]);

        $monitorRole->givePermissionTo([
            PermissionsEnum::GIVE_REPORTS->value,
            PermissionsEnum::SHOW_ADMIN->value,
            PermissionsEnum::VIEW_ANALYSIS->value,
        ]);

        $employeeRole->givePermissionTo([
            PermissionsEnum::SHOW_ADMIN->value,
            PermissionsEnum::ACCEPT_REQUEST->value,
        ]);

        $superadmin = Admin::find(1);
        $superadmin->assignRole('Superadmin');
    }
}
