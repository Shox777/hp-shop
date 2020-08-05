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
            'name'=>'HP 1',
            'slug'=>'HP 1',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
        Product::create([
            'name'=>'Laptop 2',
            'slug'=>'Laptop 2',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
        Product::create([
            'name'=>'Laptop 3',
            'slug'=>'Laptop 3',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
        Product::create([
            'name'=>'Laptop 4',
            'slug'=>'Laptop 4',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
        Product::create([
            'name'=>'Laptop 5',
            'slug'=>'Laptop 5',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
        Product::create([
            'name'=>'Laptop 6',
            'slug'=>'Laptop 6',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
        Product::create([
            'name'=>'Laptop 7',
            'slug'=>'Laptop 7',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
        Product::create([
            'name'=>'Laptop 8',
            'slug'=>'Laptop 8',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
        Product::create([
            'name'=>'Laptop 9',
            'slug'=>'Laptop 9',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
        Product::create([
            'name'=>'Laptop 10',
            'slug'=>'Laptop 10',
            'details'=>'15 inch, 1TB, SSD SDN, 32GB RAM',
            'price'=>139999,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam labore facere odit.',
        ]);
    }
}
