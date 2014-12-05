<?php
require('template/header.php');
require('clases/Usuario.php');
require('clases/Preguntas.php');
require('helpers.php');
require('conexion.php');

if (empty($_GET['url']))
    $_GET['url']='home';

controller($_GET['url']);


require('template/footer.php');

?>