<?php   
    session_start();
    if($_SESSION["tipo"]!="profesor"){
        header("location: pagina1.php");
    }
    include_once "layout_header.php";

?>
<h1>Ingresar Notas</h1>
<?php
    include_once "layout_footer.php";