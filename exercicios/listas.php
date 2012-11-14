<?php

 frutas = array ("maca","banana","pera","uva");
 ?>
 <ul>
 	<?php forach ($frutas as $frutas){?>
	<li><?php echo $frutas ;?></li>
	<?php} ?>
</ul>
 <hr>
 <ul>

 	<?php for ($i=0;$i<count($frutas);$i++){?>
    <li><?php echo $i .":" .$frutas[$i];?></li>
    <?php} ?>
</ul>
    <?php
 
forach ($frutas as $frutas){
	echo "<p> {$frutas}</p>;"
}

?>