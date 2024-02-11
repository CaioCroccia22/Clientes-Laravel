<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'cliente' => 'required',
            'email' => 'required|email',
        ]);

        if ($request->filled('cliente') && $request->filled('email')) {
            $cliente = $request->input('cliente');
            $email = $request->input('email');

            return view('cliente', ['cliente' => $cliente, 'email' => $email]);
        } else {
            return response()->json(['error' => 'Cliente ou email ausentes'], 400);
        }
    }
}
