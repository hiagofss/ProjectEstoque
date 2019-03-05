<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController {

    public function lista() {
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function listaJson() {
        $produtos = DB::select('SELECT * FROM produtos');
        return response()->json($produtos);
    }

    public function mostra() {
        $id = Request::route('id');
        $produto = Produto::find($id);

        if (empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function remove() {
        $id = Request::route('id');
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona() {
        Produto::create(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

    }

}

