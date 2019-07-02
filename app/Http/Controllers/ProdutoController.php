<?php

namespace App\Http\Controllers;
use App\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function store(Request $request)
    {
        $produto = new Produto;

        $produto->nome = $request->nome;
        $produto->valorUnitario = $request->valorUnitario;
        $produto->quantidadeEstoque = $request->quantidadeEstoque;
        $produto->situacao = $request->situacao;

        $produto->save();

        return response()->json(
            ['message' => 'Sucesso!'],
            200
        );
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return $produto;
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->nome = $request->nome;
        $produto->valorUnitario = $request->valorUnitario;
        $produto->quantidadeEstoque = $request->quantidadeEstoque;
        $produto->situacao = $request->situacao;

        $produto->save();

        return response()->json(
            ['message' => 'Sucesso!'],
            200
        );
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return response()->json(
            ['message' => 'Sucesso!'],
            200
        );
    }
}
