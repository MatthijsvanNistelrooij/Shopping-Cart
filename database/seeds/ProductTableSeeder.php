<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'images/product6.jpg',
            'title' => 'Raybon Watch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 125
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/product5.jpg',
            'title' => 'Raybon Watch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 225
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/product3.jpg',
            'title' => 'Raybon Watch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 325
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/product4.jpg',
            'title' => 'Raybon Watch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 325
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/product2.jpg',
            'title' => 'Raybar Watch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 453
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/product1.jpg',
            'title' => 'Raybon Watch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 125
        ]);
        $product->save();
    }
}
