<?php
include 'dados.php';

$resultado = array();
foreach($dados as $chave => $item){
    if($item['Estilo Musical'] == 'Rock')
        $resultado[] = $item;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <title>Yes Rock</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">Início</a>
      </nav>
    <div class="container-fluid text-center">
        <div class="jumbotron">
            <h1 class="display-4">Manipulação de Arrays em PHP</h1>
            <p>Exibindo os que gostam de rock</p>
        </div>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Estilo Musical</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        foreach($resultado as $chave => $item):?>
        <tr>
        <td><?php echo $item['Nome']?></td>
        <td><?php echo $item['Idade']?></td>
        <td><?php echo $item['Estilo Musical']?></td></tr>
        <?php endforeach;?>
  </tbody>
</table>
</body>
</html>