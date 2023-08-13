<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ListadoPacientesController extends Controller
{
    //
    public function listadoPacientes(){

        if(Auth::user()->rol == 'doctor'){

            $losPacientes = User::where('rol', 'paciente')->get();


            return view('listados.listadoPacientes', compact('losPacientes'));

            
        }






    }
}
