<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 // SQL usando query builder
 // ou SQL puro (se quiser mais controle)
// $usuarios = DB::select('SELECT * FROM usuarios');

class DBController extends Controller
{
    public function indexAsc()
    {
        $usuarios = DB::select('SELECT * FROM usuarios 
        ORDER BY nome ASC
        ');

        return response()->json($usuarios);
    }

    public function indexDesc()
    {
        $usuarios = DB::select('SELECT * FROM usuarios 
        ORDER BY nome DESC
        ');

        return response()->json($usuarios);
    }
}
