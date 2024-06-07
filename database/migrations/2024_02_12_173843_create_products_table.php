<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Product')->default('');
            $table->decimal('Price');
            $table->text('Description');
            $table->integer('Quantity')->default(0);
            $table->string('Image')->default('');
            $table->timestamps();
        });

        // Seed the database with default data
        $this->seedDefaultProducts();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }

    /**
     * Seed the database with default products.
     */
    private function seedDefaultProducts(): void
    {
        $defaultProducts = [
            ['Product' => 'Nike Air Force 1', 'Price' => 29.99, 'Description' => 'Off White Air Forces', 'Quantity' => 50, 'Image' => 'https://img.buzzfeed.com/buzzfeed-static/complex/images/Y19jcm9wLGhfMTEyMyx3XzE5OTcseF8zLHlfNDkz/cpke9mglhd9byczcte69/nike-air-force-1-high-vintage-sail-dm0209-100-pair.jpg?output-format=jpg&output-quality=auto'],
            ['Product' => 'Adidas Sneakers NY Knicks Edition', 'Price' => 19.99, 'Description' => 'White, Blue and Orange Adidas Sneakers', 'Quantity' => 50, 'Image' => 'https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2023%2F02%2Fadidas-basketball-lifestyle-footwear-preview-info-6.jpg?cbr=1&q=90'],
            ['Product' => 'Puma Fast-R Nitro Elite', 'Price' => 16.99, 'Description' => 'Red and Blue Puma Shoes', 'Quantity' => 50, 'Image' => 'https://images.novelship.com/product/puma_fast_r_nitro_elite__red_ultra_blue_mismatch___5_91933.jpeg?fit=fill&bg=FFFFFF&trim=color&auto=format,compress&q=75&h=400'],
            ['Product' => 'Converse Chuck Taylor All Star', 'Price' => 24.99, 'Description' => 'Black and Yellow Chuck Taylors', 'Quantity' => 50, 'Image' => 'https://www.kickscrew.com/cdn/shop/files/3_a3afb07c-e0d1-451b-89e2-4514b32642c0_540x.jpg?v=1708396641'],
            ['Product' => 'Nike Hyperdunks 2018 USA Edition', 'Price' => 19.99, 'Description' => 'Red, White and Blue Nike Hyperdunks', 'Quantity' => 50, 'Image' => 'https://i.pinimg.com/originals/b4/19/94/b41994b9edaca14ce18a043cc0c8c284.jpg'],
            ['Product' => 'Adidas Men Running Shoe', 'Price' => 19.99, 'Description' => 'Black Adidas Men Running Shoes', 'Quantity' => 50, 'Image' => 'https://www.verywellfit.com/thmb/FELNOxgyoZ6T5p-HVvrUJxkymCA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/best-adidas-running-shoes--50f18eff817b490dbc2cea1a463ef494.jpg'],
            ['Product' => 'Adidas Harden Stepback Shoe', 'Price' => 19.99, 'Description' => 'Pink Adidas Harden Basketball Exclusives', 'Quantity' => 50, 'Image' => 'https://www.manelsanchez.fr/uploads/media/images/adidas-harden-stepback-3-jr-pink-panther-12.jpg'],
            ['Product' => 'Converse G4 Basketball 2023', 'Price' => 49.99, 'Description' => 'Multi-colored Limited Edition Converse G4 Basketball 2023', 'Quantity' => 50, 'Image' => 'https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2020%2F04%2Fconverse-g4-official-release-date-info-3.jpg?cbr=1&q=90'],
            ['Product' => 'Nike Kyrie 7 Special FX', 'Price' => 34.99, 'Description' => 'Turquoise Nike Kyrie 7 Special FX Basketball Shoes', 'Quantity' => 50, 'Image' => 'https://i.pinimg.com/736x/0b/09/d0/0b09d031aacb39965de9c8a41cd10a6d.jpg'],
        ];

        foreach ($defaultProducts as $productData) {
            \App\Models\Product::create($productData);
        }
    }
}
