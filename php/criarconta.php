<?php
	include_once ("sql/conn.php")

	$user = $_POST['nome'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "insert into users (nome, email, password) values ($user,$email,$password);";
	
	mysqli_query($conn, $sql);
?>