<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductListingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_lists_all_products()
    {
        $products = Product::factory()->count(5)->create();

        $response = $this->get('/shop');

        $response->assertStatus(200);
        $response->assertViewHas('products');
        $response->assertSeeInOrder([
            $products[0]->name,
            $products[1]->name,
            $products[2]->name,
            $products[3]->name,
            $products[4]->name,
        ]);
    }
}