<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\PedidoProduto;
use App\Produto;

class PedidoController extends Controller
{
    public function index()
    {
        return Pedido::all();
    }

    public function store(Request $request)
    {
        $pedido = new Pedido;

        $pedido->solicitante = $request->solicitante;
        $pedido->endereco = $request->endereco;
        $pedido->despachante = $request->despachante;
        $pedido->situacao = $request->situacao;

        $id = $pedido->save();

        $this->insertProdutos($request->produtos, $pedido->id);

    }

    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return $pedido;
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);

        $pedido->solicitante = $request->solicitante;
        $pedido->endereco = $request->endereco;
        $pedido->despachante = $request->despachante;
        $pedido->situacao = $request->situacao;
        $pedido->save();

        $this->deleteProdutos($pedido->id);

        $this->insertProdutos($request->produtos, $pedido->id);
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);

        $this->deleteProdutos($id);

        $pedido->delete();
        return 204;
    }

    private function insertProdutos($produtos, $pedidoId) {
        foreach($produtos as $produtoId => $quantidade) {
            $pedidoProduto = new PedidoProduto;
            $pedidoProduto->pedido_id = $pedidoId;
            $pedidoProduto->produto_id = $produtoId;
            $pedidoProduto->quantidade = $quantidade;

            $pedidoProduto->save();

            $this->atualizarEstoque($produtoId, $quantidade);
        }
    }

    private function deleteProdutos($pedidoId) {
        foreach(PedidoProduto::where('pedido_id', $pedidoId)->get() as $pedidoProduto) {

            $this->aumentarEstoque($pedidoProduto->produto_id, $pedidoProduto->quantidade);

            $pedidoProduto->delete();
        }
    }

    private function atualizarEstoque($produtoId, $quantidade){
        $produto = Produto::findOrFail($produtoId);

        $produto->quantidadeEstoque = (int)$produto->quantidadeEstoque - (int)$quantidade;

        $produto->save();
    }

    private function aumentarEstoque($produtoId, $quantidade) {
        $produto = Produto::findOrFail($produtoId);

        $produto->quantidadeEstoque = (int)$produto->quantidadeEstoque + (int)$quantidade;

        $produto->save();
    }
}
