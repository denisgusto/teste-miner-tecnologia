<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Retorna a view do dashboard.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard');
    }
}
