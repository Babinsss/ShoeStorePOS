<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        // Logic for creating a product
    }

    public function update(Request $request, Product $product)
    {
        // Logic for updating a product
    }

    public function delete(Product $product)
    {
        // Logic for deleting a product
    }

    public function index()
    {
        // Logic for viewing all products
    }
}
