<? php
/ **
 * Índice de
 *
 * O controlador da Frente para lidar com todos os pedidos
 *
 * PHP 5
 *
 * CakePHP (tm): framework de desenvolvimento rápido (http://cakephp.org)
 * Copyright 2005-2012, bolo de Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licenciado sob a licença MIT
 * As redistribuições de arquivos devem manter o aviso de copyright acima.
 *
 * @ Copyright Copyright 2005-2012, bolo de Software Foundation, Inc. (http://cakefoundation.org)
 * @ Link http://cakephp.org CakePHP (tm) Projeto
 * @ Pacote app.webroot
 * @ Desde o CakePHP (tm) v 0.2.9
 * @ Licença MIT License (http://www.opensource.org/licenses/mit-license.php)
 * /
/ **
 * Use o DS para separar os diretórios nos define outro
 * /
se  ( ! definida ( "DS" ))  {
	define ( "DS" ,  DIRECTORY_SEPARATOR );
}
/ **
 * Estes define só deve ser editado se você tiver instalado em bolo
 * Um layout de diretório que não seja a forma como é distribuída.
 * Ao usar as configurações personalizadas se esqueça de usar o DS e não adicionar um DS à direita.
 * /

/ **
 * O caminho completo para o diretório que contém "app", sem um DS à direita.
 *
 * /
se  ( ! definido ( 'root' ))  {
	definir ( 'root' ,  dirname ( dirname ( dirname ( __FILE__ ))));
}
/ **
 * O nome do diretório atual para o "app".
 *
 * /
se  ( ! definido ( 'APP_DIR' ))  {
	definir ( 'APP_DIR' ,  basename ( dirname ( dirname ( __FILE__ ))));
}

/ **
 * O caminho absoluto para o "bolo" do diretório, sem um DS à direita.
 *
 * Un-comentar esta linha para especificar um caminho fixo para CakePHP.
 * Este deve apontar para o diretório que contém `bolo.
 *
* Para facilidade de desenvolvimento CakePHP usa include_path do PHP. Se você
 * Não pode modificar seu include_path definir esse valor.
 *
 * Deixando esta indefinido constante resultará em ser definido em Cake / bootstrap.php
 * /
	/ / Define ('CAKE_CORE_INCLUDE_PATH', ROOT DS 'lib'..);

/ **
 * Edição abaixo desta linha não deve ser necessário.
 * Mude a seu próprio risco.
 *
 * /
se  ( ! definido ( 'WEBROOT_DIR' ))  {
	definir ( 'WEBROOT_DIR' ,  basename ( dirname ( __FILE__ )));
}
se  ( ! definido ( 'WWW_ROOT' ))  {
	definir ( 'WWW_ROOT' ,  dirname ( __FILE__ )  .  DS );
}

se  ( ! definido ( 'CAKE_CORE_INCLUDE_PATH' ))  {
	se  ( function_exists ( 'ini_set' ))  {
		ini_set ( 'include_path' ,  ROOT  .  DS  .  'lib'  .  PATH_SEPARATOR  .  ini_get ( 'include_path' ));
	}
	se  ( ! incluem  ( 'bolo'  .  DS  .  "bootstrap.php ' ))  {
		$ Falhou  =  verdadeiro ;
	}
}  mais  {
	se  ( ! incluem  ( CAKE_CORE_INCLUDE_PATH  .  DS  .  "bolo"  .  DS  .  "bootstrap.php ' ))  {
		$ Falhou  =  verdadeiro ;
	}
}
se  ( ! vazio ( $ falhado ))  {
	trigger_error ( "núcleo do CakePHP não pôde ser encontrado. Verifique o valor da CAKE_CORE_INCLUDE_PATH em APP / webroot / index.php. Ele deve apontar para o diretório que contém o seu"  .  DS  .  "diretório central bolo e seu"  .  DS  .  "diretório raiz fornecedores . " ,  E_USER_ERROR );
}

App :: usos ( "Dispatcher" ,  "Encaminhamento" );

$ Dispatcher  =  novo  Dispatcher ();
$Dispatcher->dispatch(new CakeRequest(), new CakeResponse(array('charset' => Configure::read('App.encoding'))));