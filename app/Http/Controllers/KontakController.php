<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $kontak = new Kontak;
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;
        $kontak->subject = $request->subject;
        $kontak->message = $request->message;
        $kontak->save();
        return redirect()->route('kontak')->with('success', 'Pesan berhasil dikirim');
    }
}