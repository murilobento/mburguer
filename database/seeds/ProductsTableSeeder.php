<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Skol',
            'desc' => 'Pilsen',
            'type' => 'Cerveja',
            'price' => '9',
        ]);
        Product::create([
            'name' => 'Batata Rústica',
            'desc' => '200g Batata Rústica',
            'type' => 'Acompanhamento',
            'price' => '6',
        ]);
        Product::create([
            'name' => 'Suco de Laranja',
            'desc' => '400ml de Suco de Laranja',
            'type' => 'Suco',
            'price' => '8',
        ]);
        Product::create([
            'name' => 'Coca Coca',
            'desc' => 'Lata 355ml',
            'type' => 'Refrigerante',
            'price' => '5',
        ]);
        Product::create([
            'name' => 'Cheddar Bacon',
            'desc' => 'Cheddar, Bacon',
            'type' => 'Burguer',
            'price' => '15',        
        ]);
        Product::create([
            'name' => 'Double Bacon',
            'desc' => 'Bacon',
            'type' => 'Burguer',
            'price' => '16',
        ]);
        Product::create([
            'name' => 'Smash Bacon',
            'desc' => 'Cheddar, Bacon',
            'type' => 'Burguer',
            'price' => '12',
        ]);
        Product::create([
            'name' => 'Big Mac',
            'desc' => 'Cheddar, Bacon',
            'type' => 'Burguer',
            'price' => '19',
        ]);

    }
}
