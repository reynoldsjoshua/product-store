<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_product_can_be_created()
    {
        $response = $this->post('/products', $this->data());

        $product = Product::first();

        $this->assertCount(1, Product::all());
    }


    public function data(): array
    {
        return [
            'name' => 'Product name',
            'description' => 'Product description goes here',
            'count' => '1',
            'price' => '100',
        ];
    }
}
