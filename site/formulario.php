?php

// $_POST = variavel 

 // var_dump ($_POST);
//se for enviado um post e a  variaavel não é vazia 
//então mostrar os dados



if(isset ($_POST["pagina"]) && $_POST["pagina"] == "contact") {
$nome= $_POST["nome"]."</br>";
$email = $_POST["email"]."<br>";
$msg = $_POST["mensagem"];

//conectar com o banco 

mysql_connect("localhost","root","root") or //local host é o nosso servidor no caso agora 
die(mysql_error());

mysql_select_db("teste_php") or die (mysql_error());

//gerar o sql para inserir

$sql = "INSERT INTO contacts (name,email,message,created)VALUES ('Oseias Dalponte','oseiasdalponte','essa é uma mensagem legal!',NOW())";


echo $sql;

mysql_query($sql) or die (mysql_error());

mysql_close();


} else{
	header("location:contact.php");
}

//senão 
//redirecionar para a pagina de contato