<?php
$titulo='bienvenido al home';
$contenido='.....';

$variables=array('titulo'=>$titulo,'contenido'=>$contenido);

view('home',$variables);

echo ' <li><a href="login.php" class="tooltip-bottom" title="Test" ><i class="glyphicon glyphicon-book"> Examen</i></a></li>';

?>