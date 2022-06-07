<?php
include("verifica.php");
include("conecta.php");

if(!isset($_SESSION)) session_start();

if(isset($_SESSION["id_usuario"])){

	$aux = "disabled";

	$id = $_SESSION["id_usuario"];

	try {
	
		$sql = "SELECT * FROM `usuarios`WHERE `id` = '$id'";
		
		$res = $conn->query($sql)->fetchAll();

		if(count($res) > 0) {
	        foreach ($res as $row) {
	            $nome = $row['nome'];
	            $email = $row['email'];
	            $login = $row['login'];
	            $senha = $row['senha'];
                $genero = $row['genero'];
                $nascimento = $row['nascimento'];

	        }
	       
    	}	
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;

	echo ("<p><a href='excluir.php?id=$id'>Excluir a conta</a>");
}
else{
	$nome = "";
	$email = "";
	$login = "";
	$senha = "";
    $genero = "";
    $nascimento = "";
	$aux = "";
}
?>
<!DOCTYPE html>
<html lang="pt-br">        
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="perfil.css">
    </head>
    <body>
        <div class="container-fluid">
            <div>
                <div class="row">
                    <div class="selo">
                        <img class="selo" src="https://i.ibb.co/mqb65R5/pngwing-com-3.png" alt="selo" align="center">
                    </div>
                    <div class="col-sm-12">
                        <label class="label" for="usuario">nome:<input type="text" value="<?=$nome?>"></label>
                    </div>
                    <div class="col-sm-12">
                        <label class="label" for="senha">data de nascimento:<input type="text" value="<?=$nascimento?>"></label>
                    </div>
                    <div class="col-sm-12">
                        <label class="label" for="senha">genero: <input type="text" value="<?=$genero?>"></label>
                    </div>           
                    <div class="col-sm-12">
                        <label class="label" for="senha">email:<input type="text" value="<?=$email?>"></label>
                    </div>           
           
                    <div class="centralizado col-12">
                        <button><a href="cadastrar.php" id="entrar">alterar</a></button>
                    </div>
                </div>
            </div>
            <footer>Copyright © 2022. Todos os direitos reservados.</footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>

</html>
