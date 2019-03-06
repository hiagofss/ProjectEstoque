<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests\ProdutoRequest;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;
use Validator;

class ProdutoController {

    public function lista() {
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function listaJson() {
        $produtos = DB::select('SELECT * FROM produtos');
        return response()->json($produtos);
    }

    public function mostra($id) {
        $produto = Produto::find($id);

        if (empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function remove($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona(ProdutoRequest $request) {
        Produto::create($request->all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

    }

}
