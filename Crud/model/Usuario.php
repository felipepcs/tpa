<? php
class  Usuario {

    private  $ id ;
    private  $ email ;
    private  $ nome ;

    private  $ con ;

    public  function  __construct () {
        $ this -> con = novo  DOP ( SERVIDOR , USUARIO , SENHA );
    }

    public  function  all () {
        $ sql = $ this -> con -> prepare ( "SELECT * FROM usuario" );
        $ sql -> execute ();
        $ linhas = $ sql -> fetchAll ( PDO :: FETCH_CLASS );
        return  $ rows ;
    }

    public  function  create () {
        $ sql = $ this -> con -> prepare ( "INSERT INTO usuario (email, nome) VALUES (?,?)" );
        $ sql -> execute ([ $ this -> getEmail (), $ this -> getNome ()]);

        if ( $ sql -> errorCode ()! = '00000' ) {
            echo  $ sql -> errorInfo () [ 2 ];
        } else {
			cabeçalho ( "Localização: ./" );
   	 	}
    }

	public  function  read () {
        $ sql = $ this -> con -> prepare ( "SELECT * FROM usuario WHERE id =?" );
        $ sql -> execute ([ $ this -> getId ()]);
        $ row = $ sql -> fetchObject ();
        return  $ row ;		
	}

	 atualização de função  pública () {
		$ sql = $ this -> con -> prepare ( "UPDATE usuario SET email = ?, nome =? WHERE id =?" );
		$ sql -> execute ([ $ this -> getEmail (), $ this -> getNome (), $ this -> getId ()]);

		if ( $ sql -> errorCode ()! = '00000' ) {
            echo  $ sql -> errorInfo () [ 2 ];
        } else {
           cabeçalho ( "Localização: ./" );
		}
	}

	public  function  delete () {
		$ sql = $ this -> con -> prepare ( "DELETE FROM usuario WHERE id =?" );
		$ sql -> execute ([ $ this -> getId ()]);

		if ( $ sql -> errorCode ()! = '00000' ) {
            echo  $ sql -> errorInfo () [ 2 ];
        } else {
           cabeçalho ( "Localização: ./" );
		}
	}


	/ **
	 * Obtenha o valor de id
	 *
	 * @return mixado
	 * /
	public  function  getId ()
	{
		return  $ this -> id ;
	}

	/ **
	 * Defina o valor de id
	 *
	 * @param mixed $ id  
	 *
	 * @return self
	 * /
	 função  pública setId ( $ id )
	{
		$ this -> id = $ id ;

		return  $ this ;
	}

	/ **
	 * Obtenha o valor do e-mail
	 *
	 * @return mixado
	 * /
	public  function  getEmail ()
	{
		return  $ this -> email ;
	}

	/ **
	 * Defina o valor do e-mail
	 *
	 * @param mixed $ email  
	 *
	 * @return self
	 * /
	public  function  setEmail ( $ email )
	{
		$ this -> email = $ email ;

		return  $ this ;
	}

	/ **
	 * Obtenha o valor de nome
	 *
	 * @return mixado
	 * /
	public  function  getNome ()
	{
		return  $ this -> nome ;
	}

	/ **
	 * Defina o valor do nome
	 *
	 * @param mixed $ nome  
	 *
	 * @return self
	 * /
	public  function  setNome ( $ nome )
	{
		$ this -> nome = $ nome ;

		return  $ this ;
	}
}
