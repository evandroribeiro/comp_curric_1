
<html>
<?php
?>
 <head>
   <meta charset = "UTF 8"/>
     </head>
<body>
<?php
//5.	Criar uma função chamada multiplica() e refazer o exercício 4d utilizando essa função
?>
<html>
  <head>
    <title>Teste PHP</title>
      <meta charset = "UTF 8"/>
        </head>
<body>
<?php

  function multiplica($valor1, $valor2){

        $soma = 0;

        for ($i=0; $i < $valor1  ; $i++) { 
          $soma += $valor2;
        } 
        echo $soma;
      }
      

      multiplica(7,3);

 ?> 
</body>
</html>