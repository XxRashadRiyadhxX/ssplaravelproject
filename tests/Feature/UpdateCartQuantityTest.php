<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UpdateCartQuantityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_updates_the_quantity_of_a_product_in_the_cart()
    {
        $product = Product::factory()->create();

        // Start a new session
        $this->startSession();

        // Initially add the product to the cart with a quantity of 1
        session(['cart' => ['products' => [$product->id => ['quantity' => 1]]]]);

        // Retrieve the cart from the session
        $initialCart = session('cart')['products'][$product->id];
        $this->assertEquals(1, $initialCart['quantity']);

        // Update the quantity of the product in the cart
        session(['cart' => ['products' => [$product->id => ['quantity' => 2]]]]);

        // Retrieve the updated cart from the session
        $updatedCart = session('cart')['products'][$product->id];

        // Assert that the product quantity has been updated correctly
        $this->assertEquals(2, $updatedCart['quantity']);

        // Optionally, assert that the total quantity of items in the cart has increased
        $totalQuantity = collect(session('cart')['products'])->sum(function ($item) {
            return $item['quantity'];
        });
        $this->assertEquals(2, $totalQuantity);
    }
}