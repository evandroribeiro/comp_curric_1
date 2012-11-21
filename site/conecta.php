<?php 
   mysql_connect("localhost","root","")or
   
   die(mysql_error());
    mysql_select_db("teste_php")or  die (mysql_errno());
   $sql ="INSERT INTO contacts( name, email, menssage, created)
   VALUES ('evandroribeiro', 'mano-xxe@hotmail.com','essa é uma menssagem legal',NOW())";

   mysql_query($sql) or die (mysql_error());

   echo "funcionou ?";


   mysql_close();


 ?>