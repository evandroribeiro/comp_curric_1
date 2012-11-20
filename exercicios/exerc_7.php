<?php
//7.	Descrever a sua funcionalidade e fazer exemplos das seguintes funções do PHP:
//a) array() 
?>
<html>
  <head>
  	<meta charset = "UTF-8">
	<title>array</title>
</head>
<body>

<?php
  echo "<h2>resposta A</h2>";
  echo "O que é um array? Um array e um grupo de itens que normalmente compartilham as mesmas caracteristicas,
como similaridade e tipo. Ex: carros, frutas, produtos, etc... Cada item num array consiste 
de dois componentes: Chave: podem ser numericas ou associativas; Valor<br>";
    $vetor= array (1,2,3);
      $tamanho= sizeof($vetor);
        for($i=0;$i<$tamanho;$i++){
        	echo "$vetor[$i]";
        }
          ?>
</body>
</html>
 
<?php
//b) trim()
?>
<html>
<head>
	<title></title>
</head>
<body>
   <?php
   echo "<h2>resposta B</h2>";
   echo "A função trim() é responsável por remover tais sobras de string tanto no início como no fim.<br>";
   

$var1 = "     String com sobras     ";

echo (trim($var1));

?>
</body>
</html>

<?php
//c) substr()
?>
<html>
<head>
	<title></title>
</head>
<body> 
  <?php
$input = "ola mundo";
    echo "<h2>resposta C</h2>";
     echo  "substr =Retorna uma parte de uma string<br>";
      
     echo (limitchrmid($input,10));

       function limitchrmid($value,$lenght){ 
         if (strlen($value) >= $lenght ){ 
            $lenght_max = ($lenght/2)-3; 
              $start = strlen($value)- $lenght_max; 
               $limited = substr($value,0,$lenght_max); 
                $limited.= " ... ";                   
                  $limited.= substr($value,$start,$lenght_max); 
    } 
    else{ 
        $limited = $value; 
    } 
    return $limited; 
} 
?>
</body>
</html>

<?php

//d) strtolower()
?>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
      echo "<h2>resposta D</h2>";
      echo "strtolower()Retorna string com todos os caracteres do alfabeto convertidos para minúsculas<br>";

function lower_pl($str)
   {
     return strtr($str, "ABCDEFGHIJLMNOPQRSTUVXZ", "abcdefghijlmnopqestuvxz");
   }
 
  $word ="OLA MUNDO";
  $word = lower_pl ($word);

  echo ("<p>$word</p>");  
?>
</body>
</html>

<?php
//e) strtoupper()
?>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
           echo "<h2>resposta E</h2>";
           echo  "strtoupper()Retorna string com todos os caracteres do alfabeto convertidos para maiúsculas<br>";
$str = "ola mundo";
$str = strtoupper($str);
echo $str; 
 ?>          
</body>
</html>

<?php
//f) ucfirst()
?>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
  echo "<h2>resposta F</h2>";
  echo  "ucfirst — Converte para maiúscula o primeiro caractere de uma string<br>";

  $foo = "ola mundo!";
$foo = ucfirst($foo);           

$bar = "OLA MUNDO!";
$bar = ucfirst($bar);          
$bar = ucfirst(strtolower($bar)); 
      echo $bar;
?>
</body>
</html>
<?php
//g) ucwords()
?>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
     echo "<h2>resposta G</h2>";
     echo  "ucwords — Converte para maiúsculas o primeiro caractere de cada palavra<br>";


     $foo = "ola mundo";
$foo = ucwords($foo);           

$bar = "OLA MUNDO";
$bar = ucwords($bar);             
$bar = ucwords(strtolower($bar)); 
     echo $bar;

?>
</body>
</html>
<?php
//h) explode()
?>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
      echo "<h2>resposta H</h2>";
      echo "explode — Divide uma string em strings<br>";

$pizza  = "fatia1 fatia2 fatia3 fatia4 fatia5 fatia6";
$pieces = explode("6", $pizza);
echo $pieces[0]; 
echo $pieces[1]; 

  ?> 
</body>
</html>
<?php
//i) var_dump()
?>
<html>
<head>
  <title></title>
</head>
<body>
  <?php

      echo "<h2>resposta I</h2>";
      echo "var_dump — Mostra informações sobre a variável<br>";
       
       $a = array (1, 2, array ("a", "b", "c"));
var_dump ($a);

?>
</body>
</html>
<?php
//j) implode()
?>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
    echo "<h2>resposta J</h2>";
    echo "implode — Junta elementos de uma matriz em uma string<br>";

    $array = array('nome', 'email', 'phone');
     $comma_separated = implode(",", $array);

     echo $comma_separated; 
?>
</body>
</html>
<?php
//k) htmlspecialchars()
?>
<html>
<head>
  <title></title>
</head>
<body>
   <?php 
         echo "<h2>resposta K</h2>";
         echo "htmlspecialchars — Converte caracteres especiais para a realidade HTML<br>";

         $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
           echo $new;    
?>
</body>
</html>

<?php
//l) join()
?>
<html>
<head>
  <title></title>
</head>
<body>
 <?php 
      echo "<h2>resposta L</h2>";
      echo "join — Sinônimo de implode()<br>";
     
      function joinr($join, $value, $lvl=0){
        if (!is_array($join)) return joinr(array($join), $value, $lvl);
        $res = array();
        if (is_array($value)&&sizeof($value)&&is_array(current($value))){ 
            foreach($value as $val)
                $res[] = joinr($join, $val, $lvl+1);
        }
        elseif(is_array($value)) {
            $res = $value;
        }
        else $res[] = $value;

        return join(isset($join[$lvl])?$join[$lvl]:"", $res);
}
 ?>
</body>
</html>
<?php
//m) isset()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
    echo "<h2>resposta M</h2>";
    echo "isset — Informa se a variável foi iniciada<br>";

    $var = '';

if (isset($var)) {
    echo "Essa variável existe.";
}

$a = "teste";
$b = "outrotest";

var_dump( isset($a) );      
var_dump( isset ($a, $b) );

unset ($a);

var_dump( isset ($a) );     
var_dump( isset ($a, $b) ); 

$foo = NULL;
var_dump( isset ($foo) );  
?>
</body>
</html>
<?php
//n) strlen()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
        echo "<h2>resposta N</h2>";
       echo "strlen — Retorna o tamanho de uma string<br>";

       $str = "evandro";
echo strlen($str) ; 
echo  "<br>";
$str = "unoesc";
echo strlen($str); 
?>
</body>
</html>
<?php
//o) is_float(), is_int(), is_array(), is_string(), is_bool(), is_numeric()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
     echo "<h2>resposta O</h2>";
    echo "gettype — Resitui o tipo de uma variavel<br>";
    function get_type($var) 
{ 
    if(is_object($var)) 
        return get_class($var); 
    if(is_null($var)) 
        return 'null'; 
    if(is_string($var)) 
        return 'string'; 
    if(is_array($var)) 
        return 'array'; 
    if(is_int($var)) 
        return 'integer'; 
    if(is_bool($var)) 
        return 'boolean'; 
    if(is_float($var)) 
        return 'float'; 
    if(is_resource($var)) 
        return 'resource'; 

    return 'unknown'; 
     echo $var;
} 
?>
</body>
</html>
<?php
//p) getdate()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
     echo "<h2>resposta P</h2>";
     echo "getdate — Consegue informações data/hora<br>";
$today = getdate(); 
print_r($today);
 ?>
</body>
</html>
<?php
//q) empty()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
     echo "<h2>resposta Q</h2>";
    echo "empty — Informa se a variável é vazia<br>";
    $var = 0;
if (empty($var)) {
    echo '$var é um dos valores: 0, empty ou uma variável inexistente';
}
if (isset($var)) {
    echo '$var está "setado" apesar de vazio';
}
?>
</body>
</html>
<?php
//r) strip_tags()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
    echo "<h2>resposta R</h2>";
    echo "strip_tags — Retira as tags HTML e PHP de uma string<br>";
   
    $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p><a>');
?>
</body>
</html>
<?php
//s) max(), min()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
     echo "<h2>resposta S</h2>";
     echo "max — Encontra o maior valor<br>";
    echo "min — Encontra o menor valor<br>";
      $ar = array(array(1,  10, 9.0,'HELLO'),
            array(1,  11,  12.9,   'HELLO'),
            array(3,  12,  10.9,   'HELLO'));

  function col($tbl,$col){
    $ret = array();
    foreach ($tbl as $row){
      $ret[count($ret)+1] = $row[$col];
    }
    return $ret;
}
echo (max(col($ar,2))."<br>");
echo (min(col($ar,1))."<br>");
?>
</body>
</html>
<?php
//t) abs()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
       echo "<h2>resposta T</h2>";
       echo "abs — Valor absoluto<br>";

    echo(abs(6.7) . "<br />");
echo(abs(-3) . "<br />");
echo(abs(3));
?>
</body>
</html>
<?php
//u) ceil(), floor(), round()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
      echo "<h2>resposta U</h2>";
      echo "Ambos ceil () e floor () tomar apenas um parâmetro - o número para arredondar.
       Ceil () pega o número e arredonda para o inteiro mais próximo acima do seu valor atual, 
       enquanto piso () arredonda para o inteiro mais próximo abaixo do seu valor atual. Aqui está um exemplo:<br>";
       echo ceil(4.3);   
        echo ceil(9.999);  
          echo ceil(-3.14);  
?>
</body>
</html>
<php
//v) rand()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
     echo "<h2>resposta V</h2>";
      echo "rand — Gera um inteiro aleatório<br>";
      echo rand() . "\n";
echo rand() . "\n";

echo rand(5, 15);
?>
</body>
</html>
<?php
//w) sqrt()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
      echo "<h2>resposta W</h2>";
       echo "sqrt — Raiz quadrada<br>";
       echo sqrt(9); // 3
echo sqrt(10); // 3.16227766 ...
?>
</body>
</html>
<?php
//x) str_replace()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
       echo "<h2>resposta X</h2>";
       echo "str_replace — Substitui todas as ocorrências da string de procura com a string de substituição<br>";

$frase  = "você comeria frutas, vegetais, e fibra todos os dias.";
$saudavel = array("frutas", "vegetais", "fibra");
$saboroso   = array("pizza", "cerveja", "sorvete");
$novafrase = str_replace($saudavel, $saboroso, $frase);
        echo $novafrase;
 ?>
</body>
</html>
<php
//y) count()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
     echo "<h2>resposta Y</h2>";
     echo "count — Conta o número de elementos de uma variável, ou propriedades de um objeto<br>";
     $a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$result = count($a);
    echo $result;
 ?>
</body>
</html>
<?php
//z) htmlentities()
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
     echo "<h2>resposta Z</h2>";
      echo "htmlentities — Converte todos os caracteres aplicáveis em entidades html.<br>";
      $str = "A 'unoesc' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);
 ?>
</body>
</html>