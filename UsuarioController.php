<?php 

class UsuarioController{

    public function all(){

        // colocque aqui as instruções da listagem 

    }

    // C do CRUD
    public function create(){

        $usuario = new Usuario();
        $usuario->create();
        include "view/usuario_create.php";

    }

}