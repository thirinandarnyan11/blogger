<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('roles')->insert([
            'name' => 'blogger',
            'guard_name' => 'web',
             'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'user',
            'guard_name' => 'web',
             'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
