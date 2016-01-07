<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste Lógica</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
      body {
      	margin:0;
      	padding:0;
      	text-align:center;
      	}
    </style>
  </head>
  <body>
    <div class="">
      <h2>Resultado Questão 1 </h2>
        <?php

        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        function verificaZero($num){
          if($num == 0){
            echo
              "<p>Segundo numero não pode ser Zero</p><br>
              <a href='index.html'>voltar</a>";
              return false;
          }else{
            return $num;
          }
        }

        if(verificaZero($numero2) != false){
          $divisao = $numero1 / $numero2;
          echo "<p>Resultado da Divisão: ".$divisao."</p>";
          echo "<br><a href='index.html'>Voltar</a>";
        }
        ?>
  </body>
</html>
