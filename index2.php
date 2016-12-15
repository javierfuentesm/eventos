<?php
	$usuario = $_POST['usuarioo'];
	$pass = $_POST['password'];
	$tipo = $_POST['tipo'];

	if(empty($usuario) || empty($pass)){
		header("Location: index2.html");
		exit();
	}

	mysql_connect('localhost','root','') or die ("Error al conectar" . mysql_error());
	mysql_select_db('evento') or die ("Error al seleccionar la base de datos");


	switch($tipo){

		case 'A':
		$result = mysql_query("SELECT * from administrador where nombre='" . $usuario . "'");
		if($row = mysql_fetch_array($result)){
			if($row['password'] == $pass) {
				session_start();
				$_SESSION['usuario'] = $usuario;
				header("Location: dashboard/table.html");
			}else{
				header("Location: index2.html");
				exit();
			}
		}else{
			header("Location: index2.html");
			exit();
		}
		break;

		case 'B':
		$result = mysql_query("SELECT * from organizador where nombre='" . $usuario . "'");
		if($row = mysql_fetch_array($result)){
			if($row['password'] == $pass) {
				session_start();
				$_SESSION['usuario'] = $usuario;
				header("Location: dashboard/user.html");
			}else{
				header("Location: index2.html");
				exit();
			}
		}else{
			header("Location: index2.html");
			exit();
		}
		break;


		case 'C':
		$result = mysql_query("SELECT * from participante where nombre='" . $usuario . "'");
		if($row = mysql_fetch_array($result)){
			if($row['password'] == $pass) {
				session_start();
				$_SESSION['usuario'] = $usuario;
				header("Location: dashboard/user.html");
			}else{
				header("Location: index2.html");
				exit();
			}
		}else{
			header("Location: index2.html");
			exit();
		}
		break;

		case 'D': 
		$result = mysql_query("SELECT * from participante where nombre='" . $usuario . "'");
		if($row = mysql_fetch_array($result)){
			if($row['password'] == $pass) {
				session_start();
				$_SESSION['usuario'] = $usuario;
				header("Location: dashboard/user.html");
			}else{
				header("Location: index2.html");
				exit();
			}
		}else{
			header("Location: index2.html");
			exit();
		}
		break;

		case 'E':
		$result = mysql_query("SELECT * from participante where nombre='" . $usuario . "'");
		if($row = mysql_fetch_array($result)){
			if($row['password'] == $pass) {
				session_start();
				$_SESSION['usuario'] = $usuario;
				header("Location: dashboard/user.html");
			}else{
				header("Location: index2.html");
				exit();
			}
		}else{
			header("Location: index2.html");
			exit();
		}
		break;
	}	
?>
