<?php
class MedicoController{

    public function all(){        
        
        $objeto = new medico();

        $medicos = $objeto->all();

        include "view/medico.php";

    }
}
