<?php
/ *
 * Nome do arquivo: database.php
 * Data: 18 nov 2008
 * Autor: Angelo Rodrigues
 * Descrição: Contém conexão com o banco resultado,
 * As funções de gestão, validação de entrada
 *
 * Todas as funções retornam true se completou
 * Sucesso e falso se um erro
 * Ocorreu
 *
 * /
classe  de banco de dados
{

    / *
     * Edite as seguintes variáveis
     * /
    privado  $ db_host  =  'localhost' ;      Host / Banco de Dados /
    privado  $ db_user  =  'root' ;           / usuário /
    privado  $ db_pass  =  'root' ;           / Senha /
    privado  $ db_name  =  'banco de dados' ;           / Banco de Dados /
    / *
     * Edição End
     * /

    privado  $ con  =  false ;                / / verifica se a conexão está ativa
    privado  resultado $  =  matriz ();           / / Os resultados que são retornados da consulta

    / *
     * Conecta-se ao banco de dados, apenas uma conexão
     * Permitido
     * /
    público  função  conectar ()
    {
        se ( ! $ this -> con )
        {
            $ Conn  =  @ mysql_connect ( $ this -> db_host , $ this -> db_user , $ this -> db_pass );
            se ( $ conn )
            {
                Seldb $  =  @ mysql_select_db ( $ this -> db_name , $ conn );
                se ( $ seldb )
                {
                    $ This -> con  =  verdadeiro ;
                    voltar  verdade ;
                }
                outro
                {
                    retornar  falso ;
                }
            }
            outro
            {
                retornar  falso ;
            }
        }
        outro
        {
            voltar  verdade ;
        }
    }

    / *
    * Altera o novo banco de dados, define todos os resultados atuais
    * Como nulo
    * /
    público  função  setDatabase ( $ nome )
    {
        se ( $ this -> con )
        {
            se ( @ mysql_close ())
            {
                $ This -> con  =  false ;
                $ This -> resultados  =  nulo ;
                $ This -> db_name  =  $ nome ;
                $ This -> conectar ();
            }
        }

    }

    / *
    Cheques * para ver se a tabela existe quando realizar
    * Consultas
    * /
    privadas  função  tableExists ( $ tabela )
    {
        TablesInDb $  =  @ mysql_query ( "SHOW TABLES FROM ' . $ this -> db_name . 'COMO' " . $ tabela . '"' );
        se ( $ tablesInDb )
        {
            se ( mysql_num_rows ( $ tablesInDb ) == 1 )
            {
                voltar  verdade ;
            }
            outro
            {
                retornar  falso ;
            }
        }
    }

    / *
    * Selecciona informações a partir do banco de dados.
    * Obrigatório: mesa (o nome da tabela)
    * Opcional: linhas (as colunas solicitado, separados por vírgulas)
    * Onde (coluna = valor como uma string)
    * A ordem (DIRECTION coluna como uma string)
    * /
    público  função  select ( $ tabela ,  $ linhas  =  '*' ,  $ onde  =  nulo ,  pedido de US $  =  nulo )
    {
        $ Q  =  "SELECT ' . $ linhas . " FROM ' . tabela $ ;
        se ( $ onde  ! =  nulo )
            $ Q  . =  'onde' . $ onde ;
        se ( $ order  ! =  nulo )
            $ Q  =.  'ORDER BY' . pedido de US $ ;

        $ Query  =  @ mysql_query ( $ q );
        se ( $ consulta )
        {
            $ This -> numResults  =  mysql_num_rows ( $ query );
            para ( $ i  =  0 ;  $ i  <  $ this -> numResults ;  $ i + + )
            {
                $ R  =  mysql_fetch_array ( $ query );
                $ Chave  =  array_keys ( R $ );
                para ( $ x  =  0 ;  $ x  <  contagem ( $ key );  $ x + + )
                {
                    / / Sanitizes chaves para alphavalues ​​apenas são permitidos
                    se ( ! is_int ( $ chave [ $ x ]))
                    {
                        se ( mysql_num_rows ( $ query )  >  1 )
                            $ This -> resultado [ $ i ] [ $ key [ $ x ]]  =  $ r [ $ key [ $ x ]];
                        mais  se ( mysql_num_rows ( $ query )  <  1 )
                            $ This -> resultado  =  nulo ;
                        outro
                            $ This -> resultado [ $ key [ $ x ]]  =  $ r [ $ key [ $ x ]];
                    }
                }
            }
            voltar  verdade ;
        }
        outro
        {
            retornar  falso ;
        }
    }

    / *
    * Insira os valores na tabela
    * Obrigatório: mesa (o nome da tabela)
    * Os valores (os valores a serem inseridos)
    * Opcional: linhas (se os valores não correspondem ao número de linhas)
    * /
    público  função  insert ( $ table , $ valores , $ linhas  =  nulo )
    {
        se ( $ this -> tableExists ( $ tabela ))
        {
            $ Inserir  =  "INSERT INTO" . tabela $ ;
            se ( $ linhas  ! =  nulo )
            {
                $ Inserir  =.  '(' . $ linhas . ')' ;
            }

            para ( $ i  =  0 ;  $ i  <  contagem ( $ valores );  $ i + + )
            {
                se ( is_string ( $ valores [ $ i ]))
                    $ Valores [ $ i ]  =  '"' . $ valores [ $ i ] . '"' ;
            }
            $ Valores  =  implode ( ',' , $ valores );
            $ Insert  =.  'VALUES (' . $ valores . ')' ;

            $ Ins  =  @ mysql_query ( $ inserir );

            se ( $ ins )
            {
                voltar  verdade ;
            }
            outro
            {
                retornar  falso ;
            }
        }
    }

    / *
    * Exclui da tabela ou os registros em que condição for verdadeira
    * Obrigatório: mesa (o nome da tabela)
    * Opcional: onde (condição [coluna = valor])
    * /
    público  função  apagar ( $ tabela , $ onde  =  nulo )
    {
        se ( $ this -> tableExists ( $ tabela ))
        {
            se ( $ onde  ==  nulo )
            {
                $ Apagar  =  'DELETE' . $ tabela ;
            }
            outro
            {
                $ Excluir  =  'DELETE FROM' . tabela $ . ' ONDE ' . $ onde ;
            }
            $ Del  =  @ mysql_query ( $ excluir );

            se ( $ del )
            {
                voltar  verdade ;
            }
            outro
            {
                retornar  falso ;
            }
        }
        outro
        {
            retornar  falso ;
        }
    }

    / *
     Atualizações * banco de dados com os valores enviados
     * Obrigatório: tabela (o nome da tabela a ser atualizado
     * Linhas (as linhas / valores em uma matriz de chave / valor
     * Onde (a linha / condição em uma matriz (linha, condição))
     * /
    público  função  de atualização ( $ tabela , $ linhas , $ onde )
    {
        se ( $ this -> tableExists ( $ tabela ))
        {
            / / Analisar os valores em que
            / / Mesmo os valores (incluindo 0) contém as linhas onde
            / Valores / ímpares contêm cláusulas para a linha
            para ( $ i  =  0 ;  $ i  <  contagem ( $ onde );  $ i + + )
            {
                se ( $ i % 2  ! =  0 )
                {
                    se ( is_string ( $ onde [ $ i ]))
                    {
                        se (( $ i + 1 )  ! =  nulo )
                            $ Onde [ $ i ]  =  '"' . $ onde [ $ i ] . "E" ;
                        outro
                            $ Onde [ $ i ]  =  '"' . $ onde [ $ i ] . '"' ;
                    }
                }
            }
            $ Onde  =  implode ( '' , $ onde );


            $ Update  =  "UPDATE" . tabela $ . ' SET ' ;
            $ Chaves  =  array_keys ( $ linhas );
            para ( $ i  =  0 ;  $ i  <  contagem ( $ linhas );  $ i + + )
            {
                se ( is_string ( $ linhas [ $ chaves [ $ i ]]))
                {
                    $ Atualização  . =  $ chaves [ $ i ] . "=" ' . $ linhas [ $ chaves [ $ i ]] . '"' ;
                }
                outro
                {
                    $ Update  =.  $ chaves [ $ i ] . '=' . $ linhas [ $ chaves [ $ i ]];
                }

                / / Parse para adicionar vírgulas
                se ( $ i  =!  contagem ( $ linhas ) - 1 )
                {
                    $ Update  =.  ',' ;
                }
            }
            $ Update  =.  'onde' . $ onde ;
            $ Query  =  @ mysql_query ( $ update );
            se ( $ consulta )
            {
                voltar  verdade ;
            }
            outro
            {
                retornar  falso ;
            }
        }
        outro
        {
            retornar  falso ;
        }
    }

    / *
    * Retorna o conjunto de resultados
    * /
    público  função  getResult ()
    {
        retornar  $ this -> resultado ;
    }
}
>