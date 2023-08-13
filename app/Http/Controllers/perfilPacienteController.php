<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class perfilPacienteController extends Controller
{

   public function perfilPaciente (){

    $idP = Auth::user()->id;

    if(Auth::user()->rol == 'paciente'){

        $perfilPaciente = User::where('id', $idP)->get();


        return view('perfiles.perfilPaciente', compact('perfilPaciente'));


    }

   }

}
