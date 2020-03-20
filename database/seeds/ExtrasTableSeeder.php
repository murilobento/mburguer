<?php

use App\Extra;
use Illuminate\Database\Seeder;

class ExtrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Extra::create([
            'nome' => 'Skol',
            'desc' => 'Pilsen',
            'tipo' => 'Cerveja',
            'preco' => '9',
        ]);
        Extra::create([
            'nome' => 'Batata Rústica',
            'desc' => '200g Batata Rústica',
            'tipo' => 'Acompanhamento',
            'preco' => '6',
        ]);
        Extra::create([
            'nome' => 'Suco de Laranja',
            'desc' => '400ml de Suco de Laranja',
            'tipo' => 'Suco',
            'preco' => '8',
        ]);
        Extra::create([
            'nome' => 'Coca Coca',
            'desc' => 'Lata 355ml',
            'tipo' => 'Refrigerante',
            'preco' => '5',
        ]);
    }
}
