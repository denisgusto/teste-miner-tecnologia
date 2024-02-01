<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * Retorna a listagem de produtos.
     *
     * @return View
     */
    public function index(): View
    {
        $products = Product::query()->get();
        return view('products.index', compact('products'));
    }
}
