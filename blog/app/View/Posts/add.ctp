<h1> Adicionado Postagem</h1>

<?php
#criando o formulario através do AJUDANTE form
echo $this->Form->creat('Post');

#gerando os inputs através do AJUDANTE Form
 echo $this->Form->input('title');
 echo $this->Form->input('body',array('rows'=>'3'));

 #fechando o formulario e gerando o botao submit
 echo $this->Form->end("enviar");




 ?>