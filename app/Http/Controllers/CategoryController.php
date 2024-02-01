<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    /**
     * Retorna a listagem de categorias.
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::query()->get();
        return view('categories.index', compact('categories'));
    }
}
