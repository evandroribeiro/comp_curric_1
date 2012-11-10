<?php
    //faça um programa que compare o valor de 3 variaveis, apresentando qual é o maior e qual é menor;
           $maior=0;
           $menor=0;
          $varx=0;
          

 $lista = array(123,321,999);

    for ($i=0;$i< count($lista);$i++){
     if ($varx >=$maior){
        $maior = $varx;
       }
    }
      for ($i=0;$i< count($lista);$i++){
         if ($varx >= $menor){
        $menor = $varx;  
      }
    }
    ?>
<p>
faça um programa que compare o valor de 3 variaveis, apresentando qual é o maior e qual é menor
</p>
<?php
  echo $maior ."<h1>e este</h1>" . $menor ."<h1>e este </h1>";
?>