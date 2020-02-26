<?php

use App\Burguer;
use Illuminate\Database\Seeder;

class BurguersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Burguer::class, 10)->create();
    }
}
