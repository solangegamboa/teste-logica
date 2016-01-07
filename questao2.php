<?php

function verificaString($str){
  $exist = array();

  for($i=0; $i<strlen($str); $i++){
      $count=0;
      if(in_array($str[$i],$exist)) continue;
      $exist[]=$str[$i];
      for($j=$i+1;$j<strlen($str);$j++) {
          if($str[$i]==$str[$j]) {
              $count=1;
              break;
          }
      }
      if($count!=1)
      {
          echo "<p>Primeiro caractere unico de ".trim($str)." é: ".$str[$i]."</p>";
          echo "<br><a href='index.html'>Voltar</a>";
          break;
      }
  }
}

verificaString(trim($_POST['string']));
