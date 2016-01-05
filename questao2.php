<?php

echo "Entre com a string: ";
$handle = fopen ("php://stdin","r");
$str = fgets($handle);
$exist = array();

for($i=0; $i<strlen($str); $i++){
    $count=0;
    if(in_array($str[$i],$exist)) continue;
    $exist[]=$str[$i];
    for($j=$i+1;$j<=strlen($str);$j++) {
        if($str[$i]==$str[$j]) {
            $count=1;
            break;
        }
    }
    if($count!=1)
    {
        echo "Primeiro caractere unico de ".trim($str)." é: ".$str[$i]."\n";
        break;
    }
}
