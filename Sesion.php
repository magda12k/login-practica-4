<?php
  $user = $_POST["us"];
  $pass = $_POST["pass"];
    
    if($user == "alejandro" && $pass = "1234"){
      //iniciar sesion
	session_start(); //Funcion para iniciar sesion
	$_SESSION["login"] = $user; //Almacenar variables de sesion
	$_SESSION["grupo"] = "alejandro";
	 header ("location:index.php"); //redireccionar a otra pagina
         }
	  else{
                echo"Datos Incorrectos";
		echo'<br/><a href = "login.php">regresar</a>';
		}
	     











