<?php
require_once "inc/config.php";
require_once "controller/MedicoController.php";
require_once "model/Medico.php";

$app = new MedicoController();
$app->all();
