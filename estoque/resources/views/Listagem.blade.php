@extends('principal')
@section('conteudo')
  <h1>Listagem de Produtos</h1>
  <table class="table table-striped table-bordered table-hover">
    <?php foreach($produtos as $p): ?>
      <tr>
        <td><?= $p->nome ?></td>
        <td><?= $p->valor ?></td>
        <td><?= $p->descricao ?></td>
        <td><?= $p->quantidade ?></td>
        <td><a href="https://localhost/estoque/public/produtos/mostra/<?= $p->id ?>"><span class="glyphicon glyphicon-search"></span></a></td>
      </tr>
    <?php endforeach ?>
  </table>
@stop 
