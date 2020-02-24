<?php

use App\User;
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
        User::create([
            'name' => 'edwin',
            'email' => 'edrnina05@gmail.com',
            'password' => bcrypt('mcedwin123')
        ]);

        User::create([
            'name' => 'valeria',
            'email' => 'valeria@gmail.com',
            'password' => bcrypt('mcedwin123')
        ]);
        User::create([
            'name' => 'pipo',
            'email' => 'pipo@gmail.com',
            'password' => bcrypt('mcedwin123')
        ]);
    }
}
