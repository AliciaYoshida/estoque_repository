<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController  extends Controller{

  public function lista(){

    $produtos = DB::select('select * from produtos');

    return view('Listagem')->with('produtos', $produtos); // deixa a variável $produtos acessível pela view Listagem.

    //outras formas de passar parâmetros para view através de arrays.
    /*
    return view('Listagem', ['produtos' => $produtos]);

    $data = ['produtos' => $produtos];
    return view('Listagem', $data);

    $data = [];
    $data['produtos'] = $produtos;
    return view('Listagem', $data);

    */
  }

  public function mostra(){
    //$id = Request::input('id', '0'); //o $id terá o valor passado, ou zero, caso nenhum valor de id
//tenha sido enviado na requisição.
    $id = Request::route('id'); //busca parâmetro da url
    $resposta = DB::select('select * from produtos where id = ?', [$id]); //sinal de interrogação para mostrar o local
//onde o parâmetro passado no segundo argumento do método select (que
//é um array) deve ser aplicado.
    if(empty($resposta)){ // verifica se o vetor resposta está vazio
      return 'Esse produto não existe';
    }
      return view('detalhes')->with('p', $resposta[0]); // se não estiver vazio, envia $reposta[0] para a view detalhes.
  }

}
 ?>
