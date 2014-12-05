<?php
$idusuario=$_COOKIE['idu'];
$preg = new Preguntas();
if(isset($_POST['mandar'])){
    $ids=$_POST['ids'];
    $preg->calificacion($ids);
    $calificacion=$preg->califiacion;
    $preg=new Preguntas();
    $preg->updateCalificacion($idusuario,$calificacion);
}
?>
<div class="alert-success">
<center>
    <h1><?=$titulo?></h1>
<?php echo$contenido ?>
    </center></div>
<div class="table-responsive">
    <form role="form" method="post">
        <div class="form-group">
            <?=$preg->showPreguntas(); ?>
        </div>
        <button type="submit" class="btn-lg btn-default" name="mandar">Calificar</button>
    </form>
</div>

