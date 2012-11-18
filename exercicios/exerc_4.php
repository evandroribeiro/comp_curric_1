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
   echo "<h2>RESPOSTA A</h2>";
for ($i = 0; $i < 26; $i++)
{
echo "$linha $i <br>";
}

?>

<?php
     echo "<h2>RESPOSTA B</h2>";
  $n=8;
   for( $i=0;$i<=$n;$i++){
   	    echo "$i <br>";
   	     }
?>

<?php
        echo "<h2>RESPOSTA c</h2>";
 $n1=5;       
 $n=10;
    for( $i=$n1+1;$i<=$n;$i++){
   	    echo "$i <br><t>";
   	     }
  ?>  
  <?php
        echo "<h2>RESPOSTA D</h2>";
       
        $valor1 = 3;
      $valor2 = 5; 
      $soma = 0;
      for ($i=0; $i < $valor1  ; $i++) { 
          $soma += $valor2;
        } 
      echo "<p>$soma</p>"
  
  ?> 
</body>
</html>