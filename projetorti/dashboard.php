<?php

session_start();
//Verifica se a variável username está definida
//Caso contrário mostra a mensagem "Acesso restrito!" na função "die" e pára a execução do script
if (!isset($_SESSION['username'])) {
  header("refresh:0;url=index.php");
  die("Acesso restrito!");
}

$atuador1_valor = file_get_contents('api/atuadores/atuador1/valor.txt');
$atuador2_valor = file_get_contents('api/atuadores/atuador2/valor.txt');
$atuador3_valor = file_get_contents('api/atuadores/atuador3/valor.txt');

$atuador1_hora = file_get_contents('api/atuadores/atuador1/hora.txt');
$atuador2_hora = file_get_contents('api/atuadores/atuador2/hora.txt');
$atuador3_hora = file_get_contents('api/atuadores/atuador3/hora.txt');

$atuador1_data = file_get_contents('api/atuadores/atuador1/data.txt');
$atuador2_data = file_get_contents('api/atuadores/atuador2/data.txt');
$atuador3_data = file_get_contents('api/atuadores/atuador3/data.txt');

$sensor1_valor = file_get_contents('api/sensores/sensor1/valor.txt');
$sensor2_valor = file_get_contents('api/sensores/sensor2/valor.txt');
$sensor3_valor = file_get_contents('api/sensores/sensor3/valor.txt');

$sensor1_hora = file_get_contents('api/sensores/sensor1/hora.txt');
$sensor2_hora = file_get_contents('api/sensores/sensor2/hora.txt');
$sensor3_hora = file_get_contents('api/sensores/sensor3/hora.txt');

$sensor1_data = file_get_contents('api/sensores/sensor1/data.txt');
$sensor2_data = file_get_contents('api/sensores/sensor2/data.txt');
$sensor3_data = file_get_contents('api/sensores/sensor3/data.txt');



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Link css-->
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>

  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sombra">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="historico.php">Histórico </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Camera </a>
        </li>
      </ul>
      <div class="ms-auto">
        <form class="d-flex" method="get" action="index.php">
          <button class="btn btn-outline-secondary" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </nav>

  <br>
  <h2>Bem vindo!</h2><br>


  <!-- 1º grupo de Cards/Grupo dos sensores -->
  <Section>
    <div class="container">
      <div class="card-deck">

        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sensor 1</h5>
            <p class="card-text">Leitura: <?= $sensor1_valor ?></p>
          </div>
          <div class="card-footer ">
            <small class="text-muted">
              <p>Ultima atualização <?= $sensor1_data ?> | <?= $sensor1_hora ?></p>
            </small>
          </div>
        </div>


        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sensor 2</h5>
            <p class="card-text">Leitura: <?= $sensor2_valor ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              <p>Ultima atualização <?= $sensor2_data ?> | <?= $sensor2_hora ?></p>
            </small>
          </div>
        </div>

        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sensor 3</h5>
            <p class="card-text">Leitura: <?= $sensor3_valor ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              <p>Ultima atualização <?= $sensor3_data ?> | <?= $sensor3_hora ?></p>
            </small>
          </div>
        </div>
      </div><br>




      <!-- 2º grupo de Cards/Grupo dos atuadores -->

      <div class="card-deck">

        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Atuador 1</h5>
            <p class="card-text">Estado: <?= $atuador1_valor ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              <p>Ultima atualização <?= $atuador1_data ?> | <?= $atuador1_hora ?></p>
            </small>
          </div>
        </div>

        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Atuador 2</h5>
            <p class="card-text">Estado: <?= $atuador2_valor ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              <p>Ultima atualização <?= $atuador2_data ?> | <?= $atuador2_hora ?></p>
            </small>
          </div>
        </div>

        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Atuador 3</h5>
            <p class="card-text">Estado: <?= $atuador3_valor ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              <p>Ultima atualização <?= $atuador3_data ?> | <?= $atuador3_hora ?></p>
            </small>
          </div>
        </div>
      </div>
    </div>
  </Section>







  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>