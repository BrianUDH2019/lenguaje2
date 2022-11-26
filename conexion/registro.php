<form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombres" placeholder="ingrese nombres">
    <input type="number" name="codigo" placeholder="ingrese codigo">
    <input type="number" name="dni" placeholder="ingrese dni">

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
        echo "estudiante registrado";        
    }else{
        echo "error al registrar el estudiante";
    }

}