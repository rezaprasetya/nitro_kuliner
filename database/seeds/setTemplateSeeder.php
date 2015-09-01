<?php

use Illuminate\Database\Seeder;

class setTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        DB::table('themes')->insert([
            'name' => 'nitro',
            'link' => 'theme_default',
            'author' => 'administrator',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
