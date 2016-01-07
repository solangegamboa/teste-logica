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
      <h2>Resultado Questão 2</h2>
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
            if($count!=1){
                echo "<p>Primeiro caractere unico de ".trim($str)." é: ".$str[$i]."</p>";
                echo "<br><a href='index.html'>Voltar</a>";
                break;
            }
        }
      }

      verificaString(trim($_POST['string']));
      ?>
    </div>
  </body>
</html>
