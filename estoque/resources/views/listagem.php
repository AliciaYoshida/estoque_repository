<html>
<body>
  <h1>Listagem de Produtos</h1>
  <table>
    <?php foreach($produtos as $p) ?>
    <tr>
      <td><?php $p->nome ?></td>
      <td><?php $p->valor ?></td>
      <td><?php $p->descricao ?></td>
      <td><?php $p->valor ?></td>
    </tr>
  <?php endforeach ?>
  </table>
</body>
<html>
