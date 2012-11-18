<?php
//7.	Descrever a sua funcionalidade e fazer exemplos das seguintes funções do PHP:
//a) array() 
//b) trim()
//c) substr()
//d) strtolower()
//e) strtoupper()
//f) ucfirst()
//g) ucwords()
//h) explode()
//i) var_dump()
//j) implode()
//k) htmlspecialchars()
//l) join()
//m) isset()
//n) strlen()
//o) is_float(), is_int(), is_array(), is_string(), is_bool(), is_numeric()
//p) getdate()
//q) empty()
//r) strip_tags()
//s) max(), min()
//t) abs()
//u) ceil(), floor(), round()
//v) rand()
//w) sqrt()
//x) str_replace()
//y) count()
//z) htmlentities()
?>



// Rb: Esta função retorna uma string com os espaçoes retirados do ínicio e do
 //final de str. Sem o segundo parâmetro, trim() irá retirar estes caracteres

 ex:<?php

$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

// trim the ASCII control characters at the beginning and end of $binary
// (from 0 to 31 inclusive)
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

?>