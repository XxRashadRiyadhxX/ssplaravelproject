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
            $table->integer('Price');
            $table->text('Description');
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
            ['Product' => 'Product 1', 'Price' => 100, 'Description' => 'Description 1'],
            ['Product' => 'Product 2', 'Price' => 200, 'Description' => 'Description 2'],
            ['Product' => 'Product 3', 'Price' => 300, 'Description' => 'Description 3'],
            ['Product' => 'Product 4', 'Price' => 400, 'Description' => 'Description 4'],
            ['Product' => 'Product 5', 'Price' => 500, 'Description' => 'Description 5'],
            ['Product' => 'Product 6', 'Price' => 600, 'Description' => 'Description 6'],
        ];

        foreach ($defaultProducts as $productData) {
            \App\Models\Product::create($productData);
        }
    }
}
