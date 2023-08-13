<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ListadoMedicosController extends Controller
{
    public function listadoMedicos(){

        if(Auth::user()->rol == 'paciente'){

            $losMedicos = User::where('rol', 'doctor')->get();


            return view('listados.listadoMedicos', compact('losMedicos'));


        }






    }

}
