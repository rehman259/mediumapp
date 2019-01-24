<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = App\User::create([
            'name' => 'Rehman Ghani',
            'email' => 'rehman@msn.com',
            'password' => bcrypt('creative123'),
            'admin' => 1
        ]);
    }
}
