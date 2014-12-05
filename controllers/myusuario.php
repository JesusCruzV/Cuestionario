<?php
$usuario = new Usuario();
$titulo="welcome to my usuario";
$contenido="...............";
$variables=array('titulo'=>$titulo,'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());
view('myusuario',$variables);
?>