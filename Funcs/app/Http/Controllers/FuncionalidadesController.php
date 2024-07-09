<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Func;

class FuncionalidadesController extends Controller
{
    public function index()
    {   $valores = Func::get();
        return view('index')->with('valores', $valores);
    }

    public function store(Request $req)
    {
        $nome = strval($req->nome);
        $sobrenome = strval($req->sobrenome);
        $email = strval($req->email);
        $mensagem = strval($req->mensagem);

        $Func = new Func();

        $Func->nome = $nome;
        $Func->sobrenome = $sobrenome;
        $Func->email = $email;
        $Func->mensagem = $mensagem;

        $Func->save();


        return redirect('/')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function create() {
        return view('formulario');
    }

    public function edit($id) {
        $reg = Func::find($id);
        return view('formularioedit')->with('reg', $reg);
    }

    public function update(Request $req) {
        $Func = Func::find($req->id);
        $Func->nome = $req->nome;
        $Func->sobrenome = $req->sobrenome;
        $Func->email = $req->email;
        $Func->mensagem = $req->mensagem;

        $Func->save();
        return redirect('/');
    }

    public function delete(Request $req) {
        $id = $req->id;
        $c = Func::find($id);
        $c->delete();

        return redirect("/");
    }
}
