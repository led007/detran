<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ChamadosController extends Controller
{
    public $indicador1 = ['Requisição', 'Interação','Feedback','Incidente','Monitoria','Treinamento','Reunião','Auditoria'];
    public $indicador2 = ['Requisição', 'Interação','Feedback','Incidente','Monitoria','Treinamento','Reunião','Auditoria'];


    public function index(Request $request)
    {
        $pesquisa = $request->pesquisa;
        if ($pesquisa != '') {
            $chamados = Chamados::where('chamado', 'like', "%" . $pesquisa . "%")
                ->orWhere('indicador1', 'like', "%" . $pesquisa . "%")
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
            $chamado = Chamados::find($request->id);
            $chamado->update($request->all());
        } else {
            $chamado = Chamados::create($request->all());
        }
        
        $validator = Validator::make($request->all(), [    
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->message()->all()[0])->withInput();
        }
        Alert::toast('Salvo com sucesso!', 'success');

        return redirect('/chamados/editar/' . $chamado->id);
    }
    public function editar($id) {
        
        $indicador1 = $this->indicador1;
        $indicador2 = $this->indicador2;

        $chamado = Chamados::find($id);
        return view('chamados.form', compact('chamado', 'indicador1','indicador2'));
    }


    public function deletar($id)
    {
        $chamado = Chamados::find($id);
        if (!empty($chamado)) {
            $chamado->delete();
            return redirect('/chamados');
        } else {
            return redirect('/chamados');
        }
    }


}
