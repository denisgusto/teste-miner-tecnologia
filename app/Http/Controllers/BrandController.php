<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Contracts\View\View;

class BrandController extends Controller
{
    /**
     * Retorna a listagem de marcas.
     *
     * @return View
     */
    public function index(): View
    {
        $brands = Brand::query()->get();
        return view('brands.index', compact('brands'));
    }
}
