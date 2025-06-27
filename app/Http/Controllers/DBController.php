<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Include_;
// Consulta SQL direta utilizando DB::select

class DBController extends Controller
{
    public function indexAsc()
    {
         $usuarios = DB::select('SELECT * FROM usuarios ORDER BY nome ASC');
         
         return response()->json($usuarios);
    }

    public function indexDesc()
    {
         $usuarios = DB::select('SELECT * FROM usuarios ORDER BY nome DESC');
         
         return response()->json($usuarios);
    }
}
