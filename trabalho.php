	<?php
        $titulo="site.com";
        $subtitulo="feito com php";
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

        <h1> <!--DIV #conteudo-->
             <div id="conteudo">
             	    <li>$nome1 = "Tiago"</li>
             	    <li>$nome2 = "Oseias"</li>
             	    <li>$nome3 = "Evandro"</li>
             	    <li>$nome4 = "Elenice"</li>
             	    <li>$sexo1 = "M"</li>
             	    <li>$sexo2 = "M"</li>
             	    <li>$sexo3 = "M"</li>
             	    <li>$sexo4 = "F"</li>
         </h1>    	     

             </div>	     
           <
         <!--DIV #rodape-->
         <div  id="rodape">
         	 &reg; "COPYright Site.com "
        <?php  
           echo date("Y");
        ?>
     </div>   
</body>
</html>	          	
