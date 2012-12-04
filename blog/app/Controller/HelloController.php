<?php
class HelloController extends AppController {


//action
// /hello/index
	
	public function index(){
		$nomeCompleto ="evandro ribeiro";
		$this->set ('nome',$nomeCompleto);
	}
	//  /hello/sobremom
	public function sobremim(){

	}

	// hello/contato
	public function contato(){

	}
      // /hello/teste
	 public function teste(){

	 }
}
