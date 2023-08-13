<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function editar(){
        $id =Auth::user()->id;
        $user = User::find($id);
        return view('editar', compact('user'));
    }

    public function actualizar(Request $request)
    {
        $id =Auth::user()->id;
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('editar')->with('success', 'Usuario actualizado exitosamente.');
    }
}
