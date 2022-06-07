<?php
include("conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

if(!isset($_SESSION)) {
	session_start();
	
	if(isset($_SESSION["id_usuario"])){
		$id = $_SESSION["id_usuario"];
		$location = "Location:logado.php";
		$sql = "UPDATE `usuarios` SET `nome`='$nome', `email`='$email', `senha`='$senha' WHERE `id`=$id";
		header($location);
	}
	else{
		$login = $_POST["login"];
		$location = "Location:index.php";
		$sql = "INSERT INTO usuarios (`id`, `nome`, `email`, `login`, `senha`) VALUES (NULL, '$nome', '$email', '$login', '$senha')";
		header($location);
		$error = "Location:ja_cadastrado.php";
	}
}
try {	
	$conn->exec($sql);		
} catch(PDOException $e) {
	header($error);
	//echo("Usuário já cadastrado!");
	//echo $sql . "<br>" . $e->getMessage($error);
}
$conn = null;
	//header($location);
	//comentar o header sempre que houver problema em armazenar no codigo

?>

