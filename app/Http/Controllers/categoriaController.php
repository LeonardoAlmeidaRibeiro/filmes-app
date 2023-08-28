<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class categoriaController extends Controller
{
    function index()  {
        $categorias =  Categoria::all();
        return view('index',compact('categorias'));
    }
}
