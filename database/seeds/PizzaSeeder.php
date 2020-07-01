<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pizza::create([
            'pizza_name' => 'pizza de mussarela',
            'pizza_size' => 'G',
            'pizza_ingredients' => 'Mussarela e orégano',
            'pizza_price' => 30.00,
        ]); 
        Pizza::create([
            'pizza_name' => 'pizza de mussarela',
            'pizza_size' => 'P',
            'pizza_ingredients' => 'Mussarela e orégano',
            'pizza_price' => 15.00,
        ]); 
        Pizza::create([
            'pizza_name' => 'pizza de calabresa',
            'pizza_size' => 'G',
            'pizza_ingredients' => 'Mussarela, calabresa e cebola',
            'pizza_price' => 35.00,
        ]); 
        Pizza::create([
            'pizza_name' => 'pizza de calabresa',
            'pizza_size' => 'P',
            'pizza_ingredients' => 'Mussarela, calabresa e cebola',
            'pizza_price' => 18.00,
        ]); 
        Pizza::create([
            'pizza_name' => 'pizza de marguerita',
            'pizza_size' => 'G',
            'pizza_ingredients' => 'Mussarela, tomate, manjericão e orégano',
            'pizza_price' => 30.00,
        ]); 
        Pizza::create([
            'pizza_name' => 'pizza de marguerita',
            'pizza_size' => 'P',
            'pizza_ingredients' => 'Mussarela, tomate, manjericão e orégano',
            'pizza_price' => 15.00,
        ]); 
        Pizza::create([
            'pizza_name' => 'pizza portuguesa',
            'pizza_size' => 'G',
            'pizza_ingredients' => 'Mussarela, tomate, pimentão, cebola, presunto, ovos e azeitona verde.',
            'pizza_price' => 40.00,
        ]); 
        Pizza::create([
            'pizza_name' => 'pizza portuguesa',
            'pizza_size' => 'P',
            'pizza_ingredients' => 'Mussarela, tomate, pimentão, cebola, presunto, ovos e azeitona verde.',
            'pizza_price' => 20.00,
        ]); 

    }
}
