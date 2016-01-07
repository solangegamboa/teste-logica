<?php
print_r($_POST);

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
function verificaZero($num){
  if($num == 0){
    echo
      "<p>Segundo numero não pode ser Zero</p><br>
      <a href='index.php'>voltar</a>";
  }else{
    return $num;
  }
}

$divisao = $numero1 / verificaZero($numero2);
echo "<p> Resultado da divisão = ".$divisao."</p>";
/*echo "Entre com o primeiro número: ";
$handle1 = fopen ("php://stdin","r");
$num1 = fgets($handle1);

echo "Entre com o segundo numero número: ";
$handle2 = fopen ("php://stdin","r");
$num2 = verificaZero(fgets($handle2));
$divisao = $num1 / $num2;
echo "Resultado da divisão: ".$divisao."\n";*/
