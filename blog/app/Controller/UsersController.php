<? php 
classe  UsersController  estende  AppController
{

  público  função  beforeFilter ()
  {
    pai :: beforeFilter ();
    $this->Auth->allow('register','logout','change_password','remember_password','remember_password_step_2');
  }

  / / Ações
  público  função  casa ()
  {
    $ This -> Usuário -> recursive  =  0 ;    

    $ This -> set ( 'usuários' ,  $ this -> paginate ());
  }

  público  função  de login () 
  {
    se  ( $ this -> pedido -> é ( 'post' )) 
    {
      se  ( $ this -> Auth -> de login ()) 
      {
        $ This -> redirecionar ( $ this -> Auth -> redirecionar ());
      } 
      outro 
      {
        $ This -> Sessão -> método setFlash ( __ ( 'username ou senha inválida, tente novamente' ), 'flash_fail' );
      }
    }
  }


  público  função  de logout () 
  {
    $ This -> redirecionar ( $ this -> Auth -> sair ());
  }


  público  função  vista ( $ id  =  NULL ) 
  {
    $ This -> Usuário -> id  =  $ id ;

    se  ( ! $ this -> Usuário -> existe ()) 
    {
      lançar  novo  NotFoundException ( __ ( 'user inválido' ));
    }

    $ This -> set ( 'user' ,  $ this -> Usuário -> leitura ( nulo ,  $ id ));
  } 


  público  função  registo ()
  {
    se  ( $ this -> pedido -> é ( 'post' )) 
    {
      $ This -> Usuário -> criar ();

      se  ( $ this -> Usuário -> save ( $ this -> pedido -> dados )) 
      {
        $ This -> Sessão -> método setFlash ( __ ( 'O usuário foi salvo' ), 'flash_success' );
        $ This -> redirecionar ( matriz ( 'controller'  =>  'Páginas' , 'action'  =>  'home' ));
      } 
      outro 
      {   
        # Criar um laço com erros de validação
        $ This -> Erro -> set (  $ this -> Usuário -> invalidFields ()  );
      }
    }
  }

  públicos  de função  de edição ( $ id  =  NULL ) 
  {
    $ This -> Usuário -> id  =  $ id ;

    se  ( ! $ this -> Usuário -> existe ()) 
    {
      lançar  novo  NotFoundException ( __ ( 'user inválido' ));
    }

    $ User  =  $ this -> Usuário -> findById (  $ id  );
    $ This -> set ( 'user' , $ user );

    se  ( $ this -> pedido -> é ( 'post' )  | |  $ this -> pedido -> é ( 'put' )) 
    {
      se (  vazia ( $ this -> pedido -> dados [ 'User' ] [ 'password' ])  )
      {
        unset ( $ this -> pedido -> dados [ 'User' ] [ 'password' ]);
      }

      se  ( $ this -> Usuário -> save ( $ this -> pedido -> dados )) 
      {
        $ This -> Sessão -> método setFlash ( __ ( 'O usuário foi salvo' ), 'flash_success' );
        $ This -> redirecionar ( matriz ( 'action'  =>  'home' ));
      } 
      outro 
      {
        $ This -> Sessão -> método setFlash ( __ ( 'O usuário não pôde ser salvo por favor, tente novamente.'. ), 'flash_fail' );
      }
    } 
    outro 
    {
      $ This -> pedido -> dados  =  $ this -> Usuário -> leitura ( nulo ,  $ id );
      unset ( $ this -> pedido -> dados [ 'User' ] [ 'password' ]);
    }
  } 

  público  função  apagar ( $ id  =  NULL ) 
  {
    $ This -> Usuário -> id  =  $ id ;

    se  ( ! $ this -> Usuário -> existe ()) 
    {
      lançar  novo  NotFoundException ( __ ( 'user inválido' ));
    }

    se  ( $ this -> Usuário -> Apagar ()) 
    {
      $ This -> Sessão -> método setFlash ( __ ( 'Usuário apagado' ), 'flash_success' );
      $ This -> redirecionar ( matriz ( 'action'  =>  'home' ));
    }

    $ This -> Sessão -> método setFlash ( __ ( 'Usuário não foi excluída' ), 'flash_fail' );

    $ This -> redirecionar ( matriz ( 'action'  =>  'home' ));
  }    


  público  função  change_password ()
  {
    $ User  =  $ this -> Usuário -> leitura ( nulo , AuthComponent :: usuário ( "id" ));
    $ This -> set ( 'user' ,  $ user );

    se (  $ this -> pedido -> é ( 'post' )  )
    {
      # Verifique se a senha corresponde
      se (  $ this -> pedido -> dados [ 'User' ] [ 'password' ]  ===  $ this -> pedido -> dados [ 'User' ] [ 're_password' ]  )
      {
        # Verifique se o usuário está logado
        se (  AuthComponent :: usuário ( "id" )  )
        {
          $ This -> pedido -> dados [ 'User' ] [ 'id' ]  =  AuthComponent :: usuário ( "id" );
        }
        outra  # Talvez hes vindo de forma de alteração de senha
        {
          # Verifique o hash no banco de dados
          $ User  =  $ this -> Usuário -> findByHashChangePassword (  $ this -> pedido -> dados [ 'User' ] [ 'hash' ]  );
          
          se (  ! vazio ( $ user )  )
          {
            $ This -> pedido -> dados [ 'User' ] [ 'id' ]  =  $ user [ 'User' ] [ 'id' ];

            # Usuários Limpo de hash no banco de dados
            $ This -> pedido -> dados [ 'User' ] [ 'hash_change_password' ]  =  '' ;
          }
          outro
          {
            lançar  novo  MethodNotAllowedException ( __ ( "ação inválido ' ));
          }
        }

        se (  $ this -> Usuário -> save (  $ this -> pedido -> dados  )  )
        {
          $ This -> Sessão -> método setFlash ( 'Senha atualizada com sucesso!' , 'flash_success' );
          $ This -> redirecionar ( matriz ( 'controller'  =>  'users' ,  'action'  =>  'home' ));
        }
      }
      outro
      {
        $ This -> Sessão -> método setFlash ( 'As senhas não coincidem. " , "flash_fail ' );
      }
    }
  }


  / **
  * Email para informar o processo de lembrar a senha.
  * Depois de digitar o e-mail é verificado se este e-mail é válido e se assim for, é enviada uma mensagem contendo um link para mudar sua senha
  * /
  público  função  remember_password ()
  {
    se (  $ this -> pedido -> é ( 'post' )  )
    {
      $ User  =  $ this -> Usuário -> findByEmail (  $ this -> pedido -> dados [ 'User' ] [ 'email' ]  );

      se (  vazia ( $ user )  )
      {
        $ This -> Sessão -> método setFlash ( "Este e-mail não existe na nossa base de dados. ' , 'flash_fail' );
        $ This -> redirecionar ( matriz ( 'action'  =>  'login' ));
      }

      $ Hash  =  $ this -> Usuário -> generateHashChangePassword ();

      $ Dados  =  matriz (
        'Usuário'  =>  matriz (
          'Id'  =>  $ user [ 'User' ] [ 'id' ],
          'Hash_change_password'  =>  hash $
          )
        );

      $ This -> Usuário -> save ( $ dados );

      $ Email  =  novo  CakeEmail ();
      $ Email -> modelo ( 'remember_password' ,  'default' )
      -> configuração ( 'gmail' )
      -> emailFormat ( 'html' )
      -> sujeito ( __ ( 'Lembrar senha -' . Configure :: ler ( 'Application.name' )))
      -> a (  $ user [ 'User' ] [ 'email' ]  )
      -> a partir de (  Configure :: ler ( 'Application.from_email' )  )
      -> viewVars ( matriz ( 'hash'  =>  $ hash ))
      -> enviar ();        

      $ This -> Sessão -> método setFlash ( 'Verifique se o seu e-mail para continuar o processo de recuperação de senha.' , 'flash_success' );

    }
  }

  / **
  * Etapa 2 para alterar a senha.
  * Esta etapa verifica se o hash é válido, se for, mostrar o formulário para o usuário informar sua nova senha
  * /
  público  função  remember_password_step_2 (  $ hash  =  nulo  )
  {
    
    $ User  =  $ this -> Usuário -> findByHashChangePassword (  $ hash  );

    se (  $ user [ 'User' ] [ 'hash_change_password' ]  =!  $ hash  | |  vazio ( $ user ))
    {
      lançar  novo  NotFoundException ( __ ( 'Link inválido' ));
    }

    # Envia o hash para o formulário para verificar antes de alterar a senha
    $ This -> set ( 'hash' , $ hash );

    $ This -> renderizar ( "/ Users / change_password ' );
    
  }  
}
>