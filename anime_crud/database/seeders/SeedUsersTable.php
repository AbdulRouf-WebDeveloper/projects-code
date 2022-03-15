<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin user
        DB::table('users')->insert([
            'name' => 'Abdul Rouf',
            'email' => 'rouf@abdul.com',
            'email_verified_at' => now(),
            'password' => password_hash('mypass',PASSWORD_DEFAULT),
            'is_admin' => true
        ]);

        // regular user
        DB::table('users')->insert([
            'name' => 'Frank Robert',
            'email' => 'frank@robert.com',
            'email_verified_at' => now(),
            'password' => password_hash('mypass',PASSWORD_DEFAULT),

        ]);
    }
}
