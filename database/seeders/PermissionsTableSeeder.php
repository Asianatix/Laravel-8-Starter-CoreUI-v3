<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 20,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 21,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 22,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 23,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 24,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 25,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 26,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 27,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 28,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 29,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 30,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 31,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 32,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 33,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 34,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
