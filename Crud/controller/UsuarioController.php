<? php
class  UsuarioController {


    public  function  all () {
        $ obj = novo  Usuario ();
        $ usuarios = $ obj -> all ();

        incluir  'view / usuario_all.php' ;
    }

    public  function  create () {
        $ obj = novo  Usuario ();

        if ( isset ( $ _POST [ 'email' ]) && isset ( $ _POST [ 'nome' ])) {
            $ obj -> setEmail ( $ _POST [ 'email' ]);
            $ obj -> setNome ( $ _POST [ 'nome' ]);
            $ obj -> criar ();
        }

        incluir  'view / usuario_create.php' ;
    }

    public  function  read () {

    }

     atualização de função  pública () {
        if (! isset ( $ _GET [ 'id' ])) {
            echo  "Id não banco" ;
            saída;
        }

        $ obj = novo  Usuario ();

        $ obj -> setId ( $ _GET [ 'id' ]);

        if ( isset ( $ _POST [ 'email' ]) && isset ( $ _POST [ 'nome' ])) {
            $ obj -> setEmail ( $ _POST [ 'email' ]);
            $ obj -> setNome ( $ _POST [ 'nome' ]);
            $ obj -> update ();
        }

        $ usuario = $ obj -> read ();

        incluir  'view / usuario_update.php' ;
    }

    public  function  delete () {

        if (! isset ( $ _GET [ 'id' ])) {
            echo  "Id não banco" ;
            saída;
        }

        $ obj = novo  Usuario ();
        $ obj -> setId ( $ _GET [ 'id' ]);
        $ obj -> delete ();

        
    }


}
