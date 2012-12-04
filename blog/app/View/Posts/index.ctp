
  <!--<pre>
     //php print-r($postes);
 </pre> -->


   <div class= "page-hearder>"
   <h1> listando as postagens</h1>
   </div>
      <table class ="table table-hover">
       <thead>
         <tr>
           <th>Código </th>
           <th>Título</th>
           <th>Texto </th>
           <th>Criado em </th>
           <th>Atualizado em </th>
           <th colpso ="3">Ações </th>
        </tr>
       </thead>
      <tbody>
         <?php foreach ($posts as $posts):?>
          <tr>
          	<td> <?php echo $post["post"]["id"];?></td>
          	<td> <?php echo $post["post"]["title"];?></td>
          	<td> <?php echo $post["post"]["body"];?></td>
          	<td> <?php echo $post["post"]["create"];?></td>
          	<td> <?php echo $post["post"]["modified"];?></td>
         <td>

         </td>
         </tr>
      	<?php endforeach;?>
      </tbody>
      </table>
       // /posts/index/param    
     


