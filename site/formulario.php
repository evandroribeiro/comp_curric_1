<?php

  // $_POST = variavel

  // var_dump($_POST);


// SE for enviado um post e a variavel não é vazia
// então mostrar os dados
  if(isset($_POST["pagina"]) && $_POST["pagina"] == "contato" ){


    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $msg = $_POST["mensagem"];


    // conectar com o banco
    mysql_connect("localhost", "root", "root") or die(mysql_error());

    mysql_select_db("teste_php") or die(mysql_error());

    // gerar o SQL para inserir

    $sql = "INSERT INTO contacts (name, email, message, created) VALUES ('{$nome}', '{$email}', '{$msg}', NOW())";

    // echo $sql;

    mysql_query($sql) or die(mysql_error());

    mysql_close();



  } else {
// senão
// redirecionar para a página de contato
    echo "nao existe pagina";
    // header("Location: contact.php");
  }
?>
