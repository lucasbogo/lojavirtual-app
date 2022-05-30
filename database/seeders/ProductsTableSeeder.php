<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Product;


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
            'name'        => 'The Evil Within',// uniqid(date('YmdHis')), // unique id - data atual  
            'description' => 'Genêro: Survival Horror; XboxOne; Bethesda', // uniqid(date('YmdHis')), // unique id - data atual
            'image'       => 'produto1.png',
            'price'       => 10.2, 
        ]);

        Product::create([
            'name'        => 'The Evil Within 2',// uniqid(date('YmdHis')), // unique id - data atual
            'description' => 'Genêro: Survival Horror; XboxOne; Bethesda', // uniqid(date('YmdHis')), // unique id - data atual
            'image'       => 'produto2.png',
            'price'       => 10.2, 
        ]);

        Product::create([
            'name'        => 'Fallout 3', // uniqid(date('YmdHis')), // unique id - data atual
            'description' => 'Genêro: RPG; XboxOne; Bethesda', //uniqid(date('YmdHis')), // unique id - data atual
            'image'       => 'produto3.png',
            'price'       => 10.2, 
        ]);

        Product::create([
            'name'        => 'Fallout 4', // uniqid(date('YmdHis')), // unique id - data atual
            'description' => 'Genêro: RPG; XboxOne; Bethesda', //uniqid(date('YmdHis')), // unique id - data atual
            'image'       => 'produto4.png',
            'price'       => 10.2, 
        ]);

    }
}
