<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use Illuminate\Http\Request;

class ChamadosController extends Controller
{
    public $indicador1 = ['Requisição', 'Interação','Feedback','Incidente','Monitoria','Treinamento','Reunião','Auditoria'];
    public $indicador2 = ['Requisição', 'Interação','Feedback','Incidente','Monitoria','Treinamento','Reunião','Auditoria'];


    public function index(Request $request)
    {
        $pesquisa = $request->pesquisa;
        if ($pesquisa != '') {
            $chamados = Chamados::where('nome', 'like', "%" . $pesquisa . "%")
                ->orWhere('escola', 'like', "%" . $pesquisa . "%")
                ->paginate(2);
        } else {
            $chamados = Chamados::paginate(2);
        }

        return view('chamados.index', compact('chamados', 'pesquisa'));
    }

    public function novo()
    {
        $indicador1 = $this->indicador1;
        $indicador2 = $this->indicador2;


        return view('chamados.form', compact('indicador1','indicador2'));
    }

    public function salvar(Request $request)
    {
        if($request->id != '') {
            $chamados = Chamados::find($request->id);
            $chamados->update($request->all());
        } else {
            $chamados = Chamados::create($request->all());
        }
        
        $validator = Chamados::make($request->all(), [    
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->message()->all()[0])->withInput();
        }
        Alert::toast('Salvo com sucesso!', 'success');

        return redirect('/chamados/editar/' . $chamados->id);
    }

}
