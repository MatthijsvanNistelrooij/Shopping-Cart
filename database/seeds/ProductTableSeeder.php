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
            'title' => 'Carbon Watch',
            'description' => 'Lorem ipsum dolor sit amet, x ea commodo consequat. ',
            'price' => 125
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'images/product5.jpg',
            'title' => 'Sunshine Watch',
            'description' => 'Lorem ipsum dolor sit amet,ex ea commodo consequat. ',
            'price' => 225
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/product3.jpg',
            'title' => 'Illustrator Watch',
            'description' => 'Lorem ipsum dolor sit amet, x ea commodo consequat. ',
            'price' => 325
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/product4.jpg',
            'title' => 'Illustrator II Watch',
            'description' => 'Lorem ipsum dolor sit amet, x ea commodo consequat. ',
            'price' => 325
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/product2.jpg',
            'title' => 'Razor Watch',
            'description' => 'Lorem ipsum dolor sit amet, c ea commodo consequat. ',
            'price' => 453
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/product1.jpg',
            'title' => 'Raybon Watch',
            'description' => 'Lorem ipsum dolor sit amet, x ea commodo consequat. ',
            'price' => 125
        ]);
        $product->save();
    }
}
