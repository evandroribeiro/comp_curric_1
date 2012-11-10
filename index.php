<?php
     //comentario em linha
     /*comentario em bloco
     */
     # codigo php
   echo "<h1>ola mundo</h1>";
   $nome1 ="evandro";
   $nome2 = "ribeiro";

   echo  $nome1. "<h1>tem como sobrenome</h1>" . $nome2 ."<br/>";
   echo  "<h1>$nome1</h1><h1>tem como sobrenome</h1> <h1> $nome2</h1> <br/>";
   echo '<h1>$nome1 </h1><h1>tem como sobrenome</h1> <h1>$nome2</h1><br/>';

   /*tipos de variavel 
   */

   #float 
   $numero1 =13.3;

   #string
   $string = "texto";

   #int
   $int ="texto";

   #bolean 
   $bool = true;

   #Array
   $lista = array("valor1",12313,"valor 3");


   echo "<h2>lista </h2";
   echo $lista [0];

   $lista [] = 123123;



?>php