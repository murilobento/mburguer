<?php

use App\Produto;
use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'Skol',
            'desc' => 'Pilsen',
            'tipo' => 'Cerveja',
            'preco' => '9',
        ]);
        Produto::create([
            'nome' => 'Batata Rústica',
            'desc' => '200g Batata Rústica',
            'tipo' => 'Acompanhamento',
            'preco' => '6',
        ]);
        Produto::create([
            'nome' => 'Suco de Laranja',
            'desc' => '400ml de Suco de Laranja',
            'tipo' => 'Suco',
            'preco' => '8',
        ]);
        Produto::create([
            'nome' => 'Coca Coca',
            'desc' => 'Lata 355ml',
            'tipo' => 'Refrigerante',
            'preco' => '5',
        ]);
        Produto::create([
            'nome' => 'Cheddar Bacon',
            'desc' => 'Cheddar, Bacon',
            'tipo' => 'Burguer',
            'preco' => '15',        
        ]);
        Produto::create([
            'nome' => 'Double Bacon',
            'desc' => 'Bacon',
            'tipo' => 'Burguer',
            'preco' => '16',
        ]);
        Produto::create([
            'nome' => 'Smash Bacon',
            'desc' => 'Cheddar, Bacon',
            'tipo' => 'Burguer',
            'preco' => '12',
        ]);
        Produto::create([
            'nome' => 'Big Mac',
            'desc' => 'Cheddar, Bacon',
            'tipo' => 'Burguer',
            'preco' => '19',
        ]);

    }
}
