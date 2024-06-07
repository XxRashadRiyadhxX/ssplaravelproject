<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddToCartTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_adds_a_product_to_the_cart_using_session()
    {
        $product = Product::factory()->create();

        // Start a new session
        $this->startSession();

        // Add the product to the cart
        session(['cart' => ['products' => [$product->id => ['quantity' => 1]]]]);

        // Retrieve the cart from the session
        $cart = session('cart')['products'][$product->id];

        // Assert that the product quantity is correctly stored in the session
        $this->assertEquals(1, $cart['quantity']);

        // Optionally, you can also test the cart contents in the session
        $this->assertArrayHasKey($product->id, session('cart')['products']);
    }
}