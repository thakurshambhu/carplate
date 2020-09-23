<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'shambhu',
            'last_name' => 'thakur',
            'email' => 'shambhu@yopmail.com',
            'email_verified_at' => now(),
            'role' => 'admin'   ,
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
