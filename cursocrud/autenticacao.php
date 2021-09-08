<?php
require_once "crud/inc/config.php";

$con = new PDO (SERVIDOR, USUARIO, SENHA);

// procura o usuario no banco de dados
$sql = $con->prepare("SELECT * FROM usuario WHERE email=? AND senha=?");
$sql->execute([ $_POST['email'], SHA1($_POST['senha']) ) );

$usuario= $sql->fetchObject();

if ($usuario){
 
   $_SESSION['usuario'] = $usuario;
    header("Location: crud");

}else{
    $_SESSION['msg'] = " <div class='alert alert-danger'><strong>Ops!</strong> Acesso negado</div>";
    header("Location: login.php");
}
