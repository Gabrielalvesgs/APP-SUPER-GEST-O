<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal()
    {
        return view('site.principal');
    }

    public function duas_letras()
    {
        return 'A B';
    }

    public function mensagem()
    {
        return 'Olá, Painho!';
    }
}
