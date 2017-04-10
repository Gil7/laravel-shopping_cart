<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'title' => 'First Book',
            'description' => 'First book published',
            'imagePath' => '/img/design.jpg',
            'price' => 90
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Second Book',
            'description' => 'Second book published',
            'imagePath' => '/img/design.jpg',
            'price' => 290
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Third Book',
            'description' => 'Third book published',
            'imagePath' => '/img/design.jpg',
            'price' => 90
        ]);
        $product->save();

        $product = new Product([
            'title' => 'Fourth Book',
            'description' => 'Fourth book published',
            'imagePath' => '/img/design.jpg',
            'price' => 190
        ]);
        $product->save();

    }
}
