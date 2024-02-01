<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * Retorna a lista de usuários.
     *
     * @return View
     */
    public function index(): View
    {
        $users = User::where('is_admin', false)->get();

        return view('users.index', compact('users'));
    }
}
