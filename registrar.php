<?php
session_start();
include("conexao.php");


	
	$username = mysqli_real_escape_string($conexao, trim($_POST['username']));
	$name = mysqli_real_escape_string($conexao, trim($_POST['name']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$password = mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));
	
	
	$sql = "select count(*) as total from users where username = '$username'";
	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);
	
	if($row['total'] == 1) {
		$_SESSION['usuario_existe'] = true;
		echo "
		
			<script> 
				alert('Nome de usuario ja existente');
				window.location ='registro.php';
			</script>

		";

			//header('Location: registro.php');
			//exit;
	}
	else{

		$sql = "INSERT INTO users (username,name, email, password) VALUES ('$username', '$name', '$email', '$password')";
		
		if($conexao->query($sql) === TRUE) {
			$_SESSION['status_registro'] = true;
		}
		
		$conexao->close();
		
		header('Location: login.php');
		exit;

	}
	

?>