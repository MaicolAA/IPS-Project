<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class perfilDoctorController extends Controller
{
    public function perfilDoctor (){

        $idP = Auth::user()->id;

        if(Auth::user()->rol == 'doctor'){

            $perfilDoctor = User::where('id', $idP)->get();

            return view('perfiles.perfilDoctor', compact('perfilDoctor'));
        }
    }
}
