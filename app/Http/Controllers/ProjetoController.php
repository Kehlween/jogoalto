<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index()
    {
        $projetos = Projeto::simplePaginate(10);

        return view('projetos.index')->with('projetos', $projetos);
    }

    public function cadastro()
    {
        return view('projetos.cadastro');
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Projeto::create($dados);

        return redirect()->route('projetos.index');
    }
    public function edit(int $id)
    {
        $projeto = Projeto::FindOrFail($id);

        return view('projetos.edit')->with('projeto', $projeto);
    }

    public function update(int $id, Request $request)
    {
        $dados = $request->except(['_token', '_method']);

        $projeto = Projeto::FindOrFail($id);

        $projeto->update($dados);
        return redirect()->route('projetos.index');
    }
}
