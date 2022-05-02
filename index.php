<?php
    $login = $senha = $check = "";
    if(isset($_COOKIE["login"])){
        $login = $_COOKIE["login"];
        $check = "checked";
    }
    if(isset($_COOKIE["senha"]))
        $senha = $_COOKIE["senha"];
?>
<!DOCTYPE html>
<html lang="pt-br">        
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <form action="process.php" method="post" class="needs-validation">
            <div class="form-row">
                <div class="container-fluid">
                    <div>
                        <div>
                            <div class="centralizado">
                                <p class="balao">faça login ou cadastre-se para entrar</p>
                            </div>
                            <div class="centralizado">
                                <img src="https://i0.wp.com/fazerfestas.com/wp-content/uploads/2016/12/nova-turma-da-moranguinho-gatinho-pudim-new-strawberry-shortcake-02.png?resize=236%2C289&ssl=1" alt="pudim" class="pudim">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="label" for="validationServer01">login:</label>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="login" class="form-control" id="login" value="<?= $login ?>" placeholder="insira seu usuário" required>
                                <div class="valid-feedback">
                                    Usuário Ok!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor, escolha um nome de usuário.
                                    </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="label" for="validationCustom03">senha:</label>
                            </div>
                            <div class="col-sm-12">
                                <input type="password" name="senha" id="senha" value="<?= $senha ?>" class="form-control" placeholder="insira sua senha aqui" required>
                                <label>
                                    <input type="checkbox" name="salvar" <? $check ?>>
                                    salvar dados de acesso
                                </label>
                                <div class="valid-feedback">
                                    Senha válida!
                                </div>
                                <div class="invalid-feedback">
                                    Por favor, digite sua senha.
                                    </div><br>
                                <div class="centralizado col-12">
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            <div class="col-12">
                                <a href="cadastro.html" class="cadastro">cadastre-se na rede moranguinho</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                    <footer>Copyright © 2022. Todos os direitos reservados.</footer>
                </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <script src="login.js"></script>
    </body>

</html>