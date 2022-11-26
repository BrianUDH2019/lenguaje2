<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE=egde">
    <title>Sistema de notas</title>
<body>
</head>
<ul>
    <li><a href="pagina4.php">Ver estudiante</a></li>
    <li><a href="pagina3.php">Agregar estudiante</a></li>

<?php
if($_SESSION["tipo"]=="estudiante"){
    echo "<li><a href='pagina2.php'>Ver Notas</a></li>";
}
if($_SESSION["tipo"]=="profesor"){
    echo "<li><a href='pagina2.php'>Ingresar Notas</a></li>";
}
?>
<li><a href="logout.php">Salir</a></li>
</ul>
</body>
</html>