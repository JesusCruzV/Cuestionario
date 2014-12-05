<?php

class Usuario {

private $name;

    public function getUsuario(){
        echo"<br> Mostrar usuario: ".$this->name;

    }

    public function setUsuario(){

        $this->name ="Arturo Lara";
        return $this->name;

    }

    public function readuG(){

        echo"<div class='table-responsive'>";
        echo" <table class=\"table table-striped\" >";
        echo"<tr><td>idusuario</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Tipo</td></tr>";
        $sql=mysql_query("select * from usuario  order by idusuario desc ") or die (mysql_error());
        while($field= mysql_fetch_array($sql)){
            $this->id=$field['idusuario'];
            $this->nombre=$field['nombre'];
            $this->apellido_paterno=$field['apellido_paterno'];
            $this->apellido_materno=$field['apellido_materno'];
            $this->nivel=$field['nivel'];
            switch($this->nivel){
                case 1;
                    $type="Administrador";
                    break;
                case 2;
                    $type="alumno";
                    break;
                case 3;
                    $type="maestro";
                    break;
            }
            echo"<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellido_paterno</td><td>$this->apellido_materno</td><td>$type</td></tr>";

        }
        echo"</table></div>";


    }



}

?>