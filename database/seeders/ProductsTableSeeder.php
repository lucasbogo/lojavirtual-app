<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Product Name'. uniqid(date('YmdHis')), // unique id - data atual
            'image' => 'fallou3.jpg',    //url('assets/images/tmp')
            'description' => 'Descricao do Produto Aqui'. uniqid(date('YmdHis')), // unique id - data atual
            'price' => 10.2, // valor fixo
        ]);

        Product::create([
            'name' => 'Product Name'. uniqid(date('YmdHis')), // unique id - data atual
            'image' => 'fallou4.jpg',    //url('assets/images/tmp')
            'description' => 'Descricao do Produto Aqui'. uniqid(date('YmdHis')), // unique id - data atual
            'price' => 10.2, // valor fixo
        ]);

        Product::create([
            'name' => 'Product Name'. uniqid(date('YmdHis')), // unique id - data atual
            'image' => 'fallou3.jpg',    //url('assets/images/tmp')
            'description' => 'Descricao do Produto Aqui'. uniqid(date('YmdHis')), // unique id - data atual
            'price' => 10.2, // valor fixo
        ]);

        Product::create([
            'name' => 'Product Name'. uniqid(date('YmdHis')), // unique id - data atual
            'image' => 'fallou4.jpg',    //url('assets/images/tmp')
            'description' => 'Descricao do Produto Aqui'. uniqid(date('YmdHis')), // unique id - data atual
            'price' => 10.2, // valor fixo
        ]);

        Product::create([
            'name' => 'Product Name'. uniqid(date('YmdHis')), // unique id - data atual
            'image' => 'fallou3.jpg',    //url('assets/images/tmp')
            'description' => 'Descricao do Produto Aqui'. uniqid(date('YmdHis')), // unique id - data atual
            'price' => 10.2, // valor fixo
        ]);

        Product::create([
            'name' => 'Product Name'. uniqid(date('YmdHis')), // unique id - data atual
            'image' => 'fallou4.jpg',    //url('assets/images/tmp')
            'description' => 'Descricao do Produto Aqui'. uniqid(date('YmdHis')), // unique id - data atual
            'price' => 10.2, // valor fixo
        ]);

        


      
    }
}
