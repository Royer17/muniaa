<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 1,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 2,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 3,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 4,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 5,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 6,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 7,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 8,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 9,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 10,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 11,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 12,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 13,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 14,
        ]);

        DB::table('permission_user')->insert([
            'user_id' => 1,
            'permission_id' => 15,
        ]);
    }
}
