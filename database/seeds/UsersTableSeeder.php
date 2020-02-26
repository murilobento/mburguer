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
            'name' => 'Murilo Bento',
            'email' => 'murilobento@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
    }
}
