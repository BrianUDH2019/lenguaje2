<form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="number" name="numero" placeholder="ingrese codigo">
    <input type="submit" value="registrar nuevo estudiante">
</form>
<?php
if(!empty($_POST)){
    $codigo = $_POST["codigo"];
    include_once "Conn.php";
    $conn = new Conn();
    $conexion = $conn->conectar();
    $sql = "INSERT INTO estudiante(codigo) VALUES($codigo)";
    $resultado = $conexion->exec($sql);
    $conn->cerrar();

    if($resultado!=0){
        echo "figura guardada";        
    }else{
        echo "error al guardar";
    }

}