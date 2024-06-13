<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    //
    public function profil()
    {
        $profil = Profil::all();
        return view('profil', compact('profil'));
    }
}
