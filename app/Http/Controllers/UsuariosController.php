<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class UsuariosController extends Controller
{

    public $tipo_cargo = ['Service Desk 1A', 'Service Desk 1B', 'Suporte N1','Suporte N2','Suporte N3'];

    public function index(Request $request)
    {   
        $pesquisa = $request->pesquisa;
        if ($pesquisa != '') {
            $usuarios = User::where('nome', 'like', "%" . $pesquisa . "%")
                            ->orWhere('cargo','like', "%".$pesquisa."%")
            ->paginate(7);
        } else {
            $usuarios = User::paginate(7);
        }
       
        return view('usuarios.index', compact('usuarios', 'pesquisa'));
    }

    public function novo()
    {   
     
        $tipo_cargo = $this->tipo_cargo;
        return view('usuarios.form', compact('tipo_cargo'));
    }
    public function salvar(Request $request)
    {
        if($request->password != '' ){
            $request['password'] = bcrypt($request['password']);
        }else{
            unset($request['password']);
        }
        if ($request->hasFile('foto_temp')) {

            $nome_documento = date('YmdHmi') . '.' . $request->foto_temp->getClientOriginalExtension();

            $request['foto'] = '/uploads/user/' . $nome_documento;

            $request->foto_temp->move(public_path('uploads/user'), $nome_documento);
        }
        if ($request->id != '') {
            $usuario = User::find($request->id);
            $usuario->update($request->all());
        } else {
            $usuario = User::create($request->all());
        }
        
        $validator = Validator::make($request->all(), [    
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->message()->all()[0])->withInput();
        }
        Alert::toast('Salvo com sucesso!', 'success');

        return redirect('/usuarios/editar/' . $usuario->id);
    }

    public function editar($id)
    {

        $tipo_cargo = $this->tipo_cargo;
        $usuario = User::find($id);

        return view('usuarios.form', compact('tipo_cargo', 'usuario'));
    }

    public function deletar($id)
    {
        $usuario = User::find($id);
        if (!empty($usuario)) {
            $usuario->delete();
            return redirect('/usuarios');
        } else {
            return redirect('/usuarios');
        }
    }

    
}