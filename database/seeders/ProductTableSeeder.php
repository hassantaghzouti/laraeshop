<?php

namespace Database\Seeders;

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
        $product = new \App\Models\Product([
            'imagePath' => '/images/les-tomates.jpg',
            'title' => 'Les Tomates',
            'description' => 'des légumes de qualité Cultiver dans un jardin biologique',
            'price' => 12
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => '/images/les-carottes.jpg',
            'title' => 'Les Carottes',
            'description' => 'des légumes de qualité Cultiver dans un jardin biologique',
            'price' => 8
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => '/images/concombre.jpg',
            'title' => 'Concombre',
            'description' => 'des légumes de qualité Cultiver dans un jardin biologique',
            'price' => 6
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => '/images/pommes-de-terre.jpg',
            'title' => 'Pommes de Terre',
            'description' => 'des légumes de qualité Cultiver dans un jardin biologique',
            'price' => 5
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => '/images/oignon.jpg',
            'title' => 'Oignon',
            'description' => 'des légumes de qualité Cultiver dans un jardin biologique',
            'price' => 7
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => '/images/pomme-vert.jpg',
            'title' => 'Pomme vert',
            'description' => 'des fruits de qualité Cultiver dans un jardin biologique',
            'price' => 9
        ]);
        $product->save();
    }
}
