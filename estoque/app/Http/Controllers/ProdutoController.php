<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller{

  public function lista(){

    $produtos = DB::select('select * from produtos'); //Todos os valores dos produtos do banco de dados
    // serão retornados em um array,que chamamos de $produtos

    return view('listagem')->with('produtos', $produtos);

  }
}



 ?>
