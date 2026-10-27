<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function vendas() {
        $vendedor = [
            [
                'nome' => 'Felipe',
                'vendas' => 30,
                'meta' => 20,
            ],
            [
                'nome' => 'Matheus',
                'vendas' => 45,
                'meta' => 50,
            ]


        ];

        return view ('site.vendas',['vendedor' => $vendedor]);

    }
    
};
