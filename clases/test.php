<?php
class test
{
    private $idQ;
    private $Q;
    private $idR;
    private $R;
    public $grupo;

    /**
     *
     */
    public function Question()
    {

        echo "<center><div class='table-responsive well-lg' style='text-align:justify' >
         <form action='test' method='post' id='test'>";
        for ( $x=1;$x<=10;$x++){
            echo"<div class='form-control-static text-capitalize'>";
            $id = rand(1,20);
            $sql=mysql_query("select * from questions WHERE idQ=$id ORDER BY idQ ASC") or die (mysql_error());

            $grupo=mysql_result($sql,0,'question');
            $idQ=mysql_result($sql,0,'idQ');
            $sql2=mysql_query("select * from answers WHERE idQ=$idQ");
            $rows=mysql_num_rows($sql2);
            echo "$grupo<br><input type='hidden' name='pregunta$idQ' value='$idQ' />";

            for($y=0;$y<$rows;$y++){

                $respuesta=mysql_result($sql2,$y,'answer');
                $idr=mysql_result($sql2,$y,'idR');
                $indice=mysql_result($sql2,$y,'idQ');
                echo"<input type='radio' name='respuesta$indice' value='$idr'>$respuesta<br>";
            }
        }

echo"<input class='alert-success btn-lg' type='submit' value='Evaluar' ></form>";
 echo"</div></center>

<script type='text/javascript'>
    $(function (e) {

        $('#test').submit(function (e) {
            e.preventDefault()
            $('#validate').load('../views/respuesta.php?' + $('#test').serialize())
        })
    })
</script>";
    }






    public  function Answers($idR,$idQ){







    }

}
?>