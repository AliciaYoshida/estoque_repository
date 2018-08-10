
@extends('principal')
@section('conteudo')

    <div class="jumbotrom text-center">
      <h1>Detalhes do produto</h1>
    </div>
      <table class="table table-striped table-bordered table-hover">
        <th>Produto</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <tr>
          <td><?= $p->nome ?></td>
          <td><?= $p->valor ?></td>
          <td><?= $p->descricao ?></td>
          <td><?= $p->quantidade ?></td>
        </tr>
      </table>
      <a href="https://localhost/estoque/public/produtos">Voltar</a>
@stop
