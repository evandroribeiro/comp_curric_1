	<?php
        $titulo="site.com";
        $subtitulo="feito com php";
        $nome1="Tiago";
        $nome2="Oseias";
        $nome3="Evandro";
        $nome4="Elenice";
        $sexo1="M";
        $sexo2="M";
        $sexo3="M";
        $sexo4="F";
        $mensagem =' ';
 ?>       
<!DOCTYPE html>
<html>
  <head>
  	<meta charset = "UTF-8">
	 <title> 
	    <?php	
	       echo $titulo."-".$subtitulo;
         ?>
          </title>
         
  </head>             
<body>
	    <?php	
	       echo $titulo."-".$subtitulo;
         ?>
         <h1>exercicio 2</h1>
         <?php
          
        
                     echo  $nome1 ." = ".$sexo1."<br/>"; 
                     echo $nome2 ." = ".$sexo2."<br/>";
                     echo $nome3 ." = ".$sexo3."<br/>";
                     echo $nome4 ." = ".$sexo4."<br/>"; 

                      if($sexo1 =="M" && $sexo2 =="M" && $sexo3 =="M" & $sexo4 =="M"){
                          $mensagem ='Grupo masculino';
                     }

                      if($sexo1 =="F" && $sexo2 =="F" && $sexo3 =="F" & $sexo4 =="F"){
                          $mensagem='Grupo femino';
                          }

                          else {$mensagem ='Grupo misto';}
                          ?>
                        
                        <p><?php  echo  $mensagem  ?></p> 
                    
        

          	     
             </div>	     
             <!--DIV #rodape-->
             <div  id="rodape">
         	 &reg; "COPYright Site.com "
        <?php  
           echo date("Y");
        ?>
     </div>   
</body>
</html>	          	
