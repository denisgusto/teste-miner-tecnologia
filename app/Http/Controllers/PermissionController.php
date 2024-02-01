<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Retorna a lista de permissões.
     *
     * @return void
     */
    public function index()
    {
        $users = User::where('is_admin', false)->get();
        $permissions = Permission::query()->get();

        return view('permissions.index', compact('users', 'permissions'));
    }

    public function update(Request $request, $userId, $permissionId)
    {
        $user = User::where('id', $userId)->first();

        if (!$user) {
            return redirect()->route('permissions.index')->with('error', 'Usuário não encontrado');
        }

        $user->permissions()->where('permissions.id', $permissionId)->exists()
            ? $user->permissions()->detach($permissionId)
            : $user->permissions()->attach($permissionId);

        return redirect()->route('permissions.index');
    }
}
