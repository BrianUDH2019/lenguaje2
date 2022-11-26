    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
	<input type="text" name="usuario" placeholder="Ingrese usuario"><br>
	<input type="password" name="password" placeholder="Ingrese contraseña"><br>

	<input type="submit" value="Login">
</form>
<?php
	if(!empty($_POST)){
		$usuario = $_POST["usuario"];
		$password = $_POST["password"];
		
		
		if($usuario == "brian"){
			if($password == "123"){
				session_start();
				$_SESSION["id"] = 5;
				$_SESSION["tipo"] = "TABLA DE ESTUDIANTES MATRICULADOS";
				header("location: pagina1.php");
			}else{
				echo "el usuario y/o contraseña es incorrecto";
			}
		}
		else
		{
			echo "el usuario y/o contraseña es incorrecto";
		}
		
	}   



    
