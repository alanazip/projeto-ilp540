<?php
include("conecta.php");

if(!isset($_SESSION)) session_start();

if(isset($_SESSION["id_usuario"])){

	$aux = "disabled";

	$id = $_SESSION["id_usuario"];

	try {
	
		$sql = "SELECT * FROM `usuarios` WHERE `id` = '$id'";
		
		$res = $conn->query($sql)->fetchAll();

		if(count($res) > 0) {
	        foreach ($res as $row) {
	            $nome = $row['nome'];
	            $email = $row['email'];
	            $login = $row['login'];
	            $senha = $row['senha'];
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
        <link rel="stylesheet" href="cadastro.css">
    </head>
    <body>
        <form class="needs-validation" action="process_cadastrar.php" method="post">
            <div class="form-row">
                <div class="container-fluid">
                <div class="centralizado col-12">
                    <button border="2" class="button"><a href="logado.php" id="entrar">voltar</a></button>
                </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="label" for="cadastro">cadastre-se:</label>
                        </div>
                        <div class="col-sm-12">
                            <label class="label" for="validationServer01">nome:</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="seu nome aqui" value="<?=$nome?>" required>
                            <div class="valid-feedback">
                                Nome Ok!
                              </div>
                                <div class="invalid-feedback">
                                Por favor, escolha um nome de usuário.
                                </div>
                        </div>
						<div class="col-sm-12">
                            <label class="label" for="validationServer01">nome de usuario:</label>
                        </div>
						<div class="col-sm-12">
                            <input type="text" name="login" class="form-control" id="login" placeholder="seu nome de usuario aqui" value="<?=$login?>" <?=$aux?> required>
                            <div class="valid-feedback">
                                Nome Ok!
                              </div>
                                <div class="invalid-feedback">
                                Por favor, escolha um nome de usuário.
                                </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="label" for="validationServer01">email:</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="email" name="email" class="form-control" id="email" placeholder="email@exemplo.com"  value="<?=$email?>" required>
                            <div class="valid-feedback">
                                Email Ok!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, escolha um email.
                                </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="label" for="validationCustom03">senha:</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="sua senha aqui"  value="<?=$senha?>" required>
                            <div class="valid-feedback">
                                Senha válida!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, digite uma senha.
                                </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="label" for="validationCustom03">confirmar senha:</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="confirme a senha"  value="<?=$senha?>" required>
                            <div class="valid-feedback">
                                Senha válida!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, confirme sua senha.
                                </div>
                        </div>
                        <div class="centralizado col-12">
                            <input class="btn btn-primary" type="submit" border="2">
                        </div>
                        <div class="col-12">
                            <a href="index.php" class="cadastro">fazer login na rede moranguinho</a>
                        </div>
                    </div>
                </div>
            </form>
            <footer>Copyright © 2022. Todos os direitos reservados.</footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="cadastro.js"></script>
    
    
    </body>
</html>
