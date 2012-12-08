<? php

	incluir ( "classe / database.class.php" );

	$ Db  =  novo  banco de dados ();

	$ Db -> connect ();

	$ Db -> selecione ( 'posts' );

	$ Result  =  $ db -> getResult ();

	foreach ( $ resultado  como  $ i ) {
		echo  "titulo ="  .  $ i [ "title" ]  .  "<br/>" ;
	}

>