<?php 
        include 'conexion2.php';

        $alumno_id=$_POST["alumno"];
        $materias=$_POST["materias"];
        var_dump($materias);
        
        if(count($materias)>0){

            $sql="";
            for($i=0; $i<count($materias); $i++){
                $sql .= "INSERT INTO alumnos_materias(alumno_id, materia_id) VALUES(".$alumno_id.",".$materias[$i].");";
                
            }

                if($conexion->multi_query($sql) === TRUE){
                    header("Location: inicio.php");
                    $conexion->close();
                    exit;
                }else{
                    echo "<h2>Ocurrió un error</h2> <p>Error ".$sql. "<br>" .$conexion->error. "</p>";
                    echo "<h3><a href='inicio.php'>Regresar a alumnos</a></h3>";
                    $conexion->close();
             }
        }

    ?>