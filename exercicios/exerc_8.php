<?php
//Utilize o PHP para efetuar as seguintes conversões:
//a) de string para integer
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
      echo "<h2>resposta A</h2>";

       $str = "10";
   $num = (int)$str;
 
   if ($str === 10) echo "String";
   if ($num === 10) echo "Integer";

   echo $str;
 ?>
</body>
</html>
<?php
//b) de integer para string
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
         echo "<h2>resposta B</h2>";
     $int = 5;
$int_as_string = (string) $int;
echo $int . ' para '. gettype($int) . "<br>";	
echo $int_as_string . ' para '. gettype($int_as_string) . "\n";
 ?>
</body>
</html>
<?php
//c) de string para array
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
       echo "<h2>resposta C</h2>";
$var = 'EVANDRO RIBEIRO';

echo $var[0]; 
echo $var[8]; 


 ?>
</body>
</html>
<?php
//d) de array para string
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
      echo "<h2>resposta D</h2>";
$array[] = "www.mano-xxe@hotmail.com";
$array[] = "evandro ribeiro";
$array[] = "unoesc";

print_r(implode(':', $array))


 ?>
</body>
</html>
<?PHP
//e) de integer para float
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
      echo "<h2>resposta E</h2>";
    var_dump(25/7);      
var_dump((int) (25/7));
var_dump(round(25/7));  
 ?>
</body>
</html>
<?php
//f) de float para string em formato de dinheiro: R$ 23,45
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php 
         echo "<h2>resposta F</h2>";
      
      
	 ?>
	</body>
	</html>	
