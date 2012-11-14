<html>
<?php
//4.	Utilizando o for() e while():
//a) Mostrar 25x a frase: "Lactobacilos vivos também possuem sentimentos";
//b) Escrever um algoritmo que receba qualquer valor e mostre os valores de 0 até o número digitado. Ex: $var = 3; "0 1 2 3";
//c) capturar dois valores em variáveis e mostrar os números entre eles. Ex: 5 e 10, imprimir: "6 7 8 9";
//d) Escrever um algoritmo que multiplique os números utilizando apenas o operador +, ex: (3 * 5) = 5 + 5 + 5

$linha="Lactobacilos vivos também possuem sentimentos"

?>
<html>
  <head>
    <title>Teste PHP</title>
      <meta charset = "UTF 8"/>
        </head>
<body>
<?php

for ($i = 0; $i < 26; $i++)
{
echo "$linha $i <br>";
}

?>

<?php
  $n=4;
   for( $i=0;$i<=$n;$i++){
   	    echo "$i=$n-1 <br>";
   	     }
?>

<?php
 $n=10;
    for( $i=5;$i<=$n;$i++){
   	    echo "$i=$n-1 <br><t>";
   	     }
  ?>  
  <?php
      $n1=5;
      $n=4;
      echo "($n1*$n)=$n."+".$n";



  ?> 
</body>
</html>