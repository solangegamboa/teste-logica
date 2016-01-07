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
