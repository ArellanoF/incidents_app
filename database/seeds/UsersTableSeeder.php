<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Admin
        User::create([
        	'name' => 'admin',
        	'email' => 'admin@root.com',
        	'password' => bcrypt('123123'),
        	'role' => 0
        ]);

        // Client
        User::create([
        	'name' => 'Client',
        	'email' => 'client@root.com',
        	'password' => bcrypt('123123'),
        	'role' => 2
        ]);
    }
}
