<?php

function verificaZero($num){
  if($num == 0){
    echo "Não pode ser ZERO(0) - Entre com um novo numero: ";
    $handle = fopen ("php://stdin","r");
    $num_return = fgets($handle);
    return verificaZero($num_return);
  }else{
    return $num;
  }
}

echo "Entre com o primeiro número: ";
$handle1 = fopen ("php://stdin","r");
$num1 = fgets($handle1);

echo "Entre com o segundo numero número: ";
$handle2 = fopen ("php://stdin","r");
$num2 = verificaZero(fgets($handle2));
$divisao = $num1 / $num2;
echo "Resultado da divisão: ".$divisao."\n";
