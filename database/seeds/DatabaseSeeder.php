<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
//use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);



/*        $item   = new User;
        $item->uuid      = '267445df-e11e-3610-9571-3419f7d8f1d5';
        $item->name      = 'User A';
        $item->email     = 'a@email.com';
        $item->password  = '$2y$10$6iR.KOt5gLVoYF3lueIvbuOOkDJ9NSCroCHip4DvFiq6HpYslo1hK';
        $item->save();

        $item   = new User;
        $item->uuid      = '5fd1b538-eb31-3502-bff5-f234a25a2c27';
        $item->name      = 'User B';
        $item->email     = 'b@email.com';
        $item->password  = '$2y$10$QS4NOSA5k1ikfptiqbBWxemd9TKBwDI4OE6qMG4prfhNz3RuDaakO';
        $item->save();*/


        $now    = \Carbon\Carbon::now();

        DB::table('users')->insert([
            [
                'uuid'      => '267445df-e11e-3610-9571-3419f7d8f1d5',
                'name'      => 'User A',
                'email'     => 'a@email.com',
                'password'  => '$2y$10$6iR.KOt5gLVoYF3lueIvbuOOkDJ9NSCroCHip4DvFiq6HpYslo1hK',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '5fd1b538-eb31-3502-bff5-f234a25a2c27',
                'name'      => 'User B',
                'email'     => 'b@email.com',
                'password'  => '$2y$10$QS4NOSA5k1ikfptiqbBWxemd9TKBwDI4OE6qMG4prfhNz3RuDaakO',
                'created_at'    => $now,
                'updated_at'    => $now,
            ]
        ]);

        DB::table('roles')->insert([
           [
               'uuid'      => '1f0c0124-a08a-3362-9df7-3e1025101118',
               'name'      => 'Outlet',
               'created_at'    => $now,
               'updated_at'    => $now,
           ],
            [
                'uuid'      => '4a7dccfb-b043-31c2-a125-5fdaf1b55b71',
                'name'      => 'Admin',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '9b1f718f-ee8e-348b-83bd-9b951a5cf321',
                'name'      => 'Menu',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => 'b610d48e-1fcb-3900-b8ff-59b89b833d56',
                'name'      => 'Guest',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ]);

        DB::table('modules')->insert([
            [
                'uuid'      => 'dcd30071-2319-3c55-a27d-672224b30ca2',
                'route'     => 'api/menu/add',
                'name'      => 'Menu - Add',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => 'cb99382d-afdf-3619-a16a-6d3ad2eaff5c',
                'route'     => 'api/menu/edit',
                'name'      => 'Menu - Edit',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '9094b46c-be02-3248-8b2b-469801861fa8',
                'route'     => 'api/outlet/edit',
                'name'      => 'Outlet - Edit',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '6b49d674-7d9e-3fe7-b55b-7c7b2c07f57e',
                'route'     => 'api/outlet/add',
                'name'      => 'Outlet - Add',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '2d383de4-42ed-3e61-a17e-2f27e736e1fe',
                'route'     => 'api/user/list',
                'name'      => 'User - List',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => 'eddb1615-7a9f-33a1-ba6e-ca84f85232bd',
                'route'     => 'api/menu/list',
                'name'      => 'Menu - List',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => 'd1e8a2e3-89a9-3301-b60a-067180e2f826',
                'route'     => 'api/menu/delete',
                'name'      => 'Menu - Delete',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '10c022da-6f83-38fe-a4b1-db2448e90130',
                'route'     => 'api/user/update-role',
                'name'      => 'User - Update Role',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => 'c2373383-8003-32d8-a8a9-00fe1a291b99',
                'route'     => 'api/user/add',
                'name'      => 'User - Add',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => 'b8b02838-fcee-31ee-a75f-1697a05f0f3c',
                'route'     => 'api/user/edit',
                'name'      => 'User - Edit',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '54890da6-012c-3d63-a271-dc3e10d3a34e',
                'route'     => 'api/module/list',
                'name'      => 'Module - List',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '3376bb7a-e13e-3c79-80c4-daad6aa8b729',
                'route'     => 'api/module/add',
                'name'      => 'Module - Add',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '8e4abd64-2053-305e-b2a6-8002dd340388',
                'route'     => 'api/module/edit',
                'name'      => 'Module - Edit',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '2905d574-5562-3905-a255-617f2a4d8d8c',
                'route'     => 'api/module/delete',
                'name'      => 'Module - Delete',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '46f3f1dd-ed7a-3a9b-8bf4-6e4c26a3c814',
                'route'     => 'api/role/delete',
                'name'      => 'Role - Delete',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => 'bef3fef1-9596-316e-82e4-0c10cdfc84c2',
                'route'     => 'api/role/add',
                'name'      => 'Role - Add',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '6bd83430-8d75-3d03-a506-ac15aa84279a',
                'route'     => 'api/role/edit',
                'name'      => 'Role - Edit',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => 'c5c3192a-0c3b-38de-83da-b59e58310847',
                'route'     => 'api/role/list',
                'name'      => 'Role - List',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '5272cce3-4e0b-3bd9-964b-25e19af86595',
                'route'     => 'api/menu/list-by-category',
                'name'      => 'Menu - List by category',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'uuid'      => '1b650b9c-6a2b-3aaf-a05f-c877a282fedf',
                'route'     => 'api/role/update-module',
                'name'      => 'Role - Update Modules of role',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ]);

        DB::table('role_modules')->insert([
            [
                'role_id'       => 1,
                'module_id'     => 3,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 1,
                'module_id'     => 4,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 1,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 2,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 3,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 4,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 5,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 6,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 7,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 8,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 9,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 10,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 11,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 12,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 13,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 14,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 15,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 16,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 17,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 18,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 19,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 2,
                'module_id'     => 20,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 3,
                'module_id'     => 1,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 3,
                'module_id'     => 2,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 3,
                'module_id'     => 6,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 3,
                'module_id'     => 7,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'role_id'       => 3,
                'module_id'     => 19,
                'created_at'    => $now,
                'updated_at'    => $now,
            ]
        ]);

        DB::table('user_roles')->insert([
            [
                'user_id'       => 1,
                'role_id'       => 2,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'user_id'       => 2,
                'role_id'       => 1,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'user_id'       => 2,
                'role_id'       => 3,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ]);

    }
}
