<?php

use App\Burguer;
use App\Extra;
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
       $this->call(UsersTableSeeder::class);
       $this->call(BurguersTableSeeder::class);
       $this->call(ExtrasTableSeeder::class);

        
    }
}
