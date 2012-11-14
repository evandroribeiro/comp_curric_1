<!docty pe html>
<html>
 <head>
   <meta charset = "UTF 8"/>
     </head>
<body>
<?php
//3.	Utilizando a condição switch(): 
//a) Caso a $qtd de produtos for zero: mostrar uma mensagem informando que não possui nenhum produto cadastrado;
//b) Caso a $qtd for 1: mostrar a mensagem: "Você possui um produto cadastrado";
//c) Caso a $qtd for 1, 2 e 3: Mostrar a mensagem: "Você possui vários produtos cadastrados";
//d) Caso não for nenhum desses números, mostrar: "Cadastro inválido, tente novamente";


   #produtos

    $produtos=3;
     
    
    switch($produtos){ 
          
         case 0:
           echo "nao posui produtos cadastrado";
           break;
           case 1:
             echo "você possui 1 produto cadastrado";
             break;
             case 2:
               echo "você possui 2 produtos cadastrados";
               break;
               case 3:
                 echo "você possui varios produtos cadastrados";
                 break;
                   
                          default :
                          echo "cadastro invalido";
                      }
         ?>                 
</body>
</html>	    