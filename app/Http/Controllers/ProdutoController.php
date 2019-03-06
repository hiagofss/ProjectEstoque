<?php namespace estoque\Http\Controllers;

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

    public function adiciona() {

        $validator = Validator::make(
            ['nome'=>Request::input('nome')],
            ['nome'=> 'required|,in3']
        );

        if ($validator->fails()) {
            $msgs = $validator->messages();
            dd($msgs);
            return redirect()->action('ProdutoController@novo');
        }
        Produto::create(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

    }

}
