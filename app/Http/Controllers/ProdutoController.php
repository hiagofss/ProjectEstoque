<?php namespace estoque\Http\Controllers;

use DB;
use Request;

class ProdutoController {

    public function lista() {

        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function listaJson() {
        $produtos = DB::select('SELECT * FROM produtos');
        return $produtos;
    }

    public function mostra() {
        $id = Request::route('id');
        $produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);

        if (empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto[0]);
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona() {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao = Request::input('descricao');

        DB::insert('INSERT INTO produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)', array($nome, $quantidade, $valor, $descricao));



        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

    }

}

