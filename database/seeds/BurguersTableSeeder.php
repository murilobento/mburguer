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
        Burguer::create([
            'nome' => 'Cheddar Bacon',
            'desc' => 'Cheddar, Bacon',
            'preco' => '15',        
        ]);
        Burguer::create([
            'nome' => 'Double Bacon',
            'desc' => 'Bacon',
            'preco' => '16',
        ]);
        Burguer::create([
            'nome' => 'Smash Bacon',
            'desc' => 'Cheddar, Bacon',
            'preco' => '12',
        ]);
        Burguer::create([
            'nome' => 'Big Mac',
            'desc' => 'Cheddar, Bacon',
            'preco' => '19',
        ]);
    }
}
