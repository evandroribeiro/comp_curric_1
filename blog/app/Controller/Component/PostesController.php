<?php

class PostsController extends AppController {
	 public $helpers = array ('Html','Form');
	 public $components = array ('Session');
//action
	 //  /post/index
	 public function index (){
	 	$todasAsPostagens=$this->Post->find('all');

	 	//jogar pra View 
	 	$this ->set('posts', $todasAsPostagens);
	 	$todasAsPostagens=$this->Post->find('all');

	 }

	 # /posts/view/3
	 public function view($id = null){


	 	#setar o post com o id ==3

	 	$this->Post->id=$id; 

	 	#porcuaara no banco o item com id 3 
	 	$p= $this->Post-> read();

	 	#enviando para a view os campos do item 
	 	$this-> set ('post',$p);



	 }

	# /post/add
	 public function add (){
	 	#se for enviado um post pegar os daods do form e salvar no banco
	 	if($this->request->is('post')){
	 		#
	 		$dadosDoFormulario = $this->request->data;

	 		#tentar salvar os dados no banco
	 		#se conseguir salvar,mostar MSG e redirecionar para o index 
	 		if($this->Post->save($dadosDoFormulario)){
	 			#mostrar MSG
	 			$this->Session->setFlash("A postagem foi inserida com sucesso");
	 			#redirecionar para o index 
	 			$this->redirect(array('action'=>'index'));
	 		}
	 	}
	 }

}
