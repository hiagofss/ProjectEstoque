<?php namespace estoque\Http\Controllers;

use DB;

class ProdutoController {

    public function lista() {

        $produtos = DB::select('select * from produtos');
        
        return view('listagem')->with('produtos', $produtos);
    }
}