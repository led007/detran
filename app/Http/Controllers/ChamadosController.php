<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use Illuminate\Http\Request;

class ChamadosController extends Controller
{
    public function index(Request $request)
    {

        return view('chamados.index');
    }


    public function novo()
    {


        return view('chamados.form');
    }
}
