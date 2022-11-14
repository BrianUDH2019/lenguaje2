<?php
include_once "Conn.php";
    try{

    $conn = new Conn();
    $conexion = $conn->conectar();
    $sql1 = "SELECT nombre,escuela,profesor,semestre,id_curso,nombres,id_estudiante,codigo,dni
    FROM estudiante as e
    JOIN  matricula as m
    ON e.id=m.id
    join curso as c
    on m.id=c.id";

    $resultado = $conexion->query($sql1);
    $conn->cerrar();
    echo "<table border='1'>
            <tr>
                <th>Nombre de curso</th>
                <th>Escuela</th>
                <th>Docente</th>
                <th>semestre</th>
                <th>ID de Curso</th>
                <th>Nombre de estudiante</th>
                <th>Codigo de Estudiante</th>
                <th>DNI</th>




            </tr>";    
    foreach ($resultado as $matricula){  

        echo "<tr>
            <td>".$matricula["nombre"]."</td>
            <td>".$matricula["escuela"]."</td>
            <td>".$matricula["profesor"]."</td>
            <td>".$matricula["semestre"]."</td>
            <td>".$matricula["id_curso"]."</td>
            <td>".$matricula["nombres"]."</td>
            <td>".$matricula["codigo"]."</td>
            <td>".$matricula["dni"]."</td>



        </tr>";
    }
    echo "</table>"; 
   //echo "</pre>";

    }catch(PDOexception $e){
        echo " hubo un error".$e->getMessage();
    }
?>