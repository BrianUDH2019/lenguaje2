<?php   
    session_start();
    if(!isset($_SESSION["tipo"])){
       header("location: index.php");
    }
    include_once "layout_header.php";
?>

<html>
	<head>
    <body>
	BIENVENIDO
	</body>
        <img src="data:image/png;base64,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">
	
</html> 