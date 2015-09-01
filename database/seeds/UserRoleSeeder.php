<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        DB::table('user_roles')->insert([
            'code' => 'ROOT',
            'name' => 'root',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('user_roles')->insert([
            'code' => 'ADMT',
            'name' => 'admin template',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('user_roles')->insert([
            'code' => 'ADMP',
            'name' => 'admin product',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        DB::table('user_roles')->insert([
            'code' => 'USER',
            'name' => 'user',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
