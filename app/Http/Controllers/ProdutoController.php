<?php namespace estoque\Http\Controllers;

use DB;
use Request;

class ProdutoController {

    public function lista() {

        $produtos = DB::select('select * from produtos');

        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra() {
        $id = Request::route('id');
        $produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);

        if (empty($produto)) {
            return "Esse produto não existe";
        }
        return view('detalhes')->with('p', $produto[0]);
    }
}
