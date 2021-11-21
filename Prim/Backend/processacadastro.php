<?php

include_once("conexao.php");

$nome = $_POST['Nome'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];
$rsenha = $_POST['RSenha'];

$nome = mysqli_real_escape_string($conexao, $nome);
$email = mysqli_real_escape_string($conexao, $email);
$senha = mysqli_real_escape_string($conexao, $senha);
$rsenha = mysqli_real_escape_string($conexao, $rsenha);

if ($senha == $rsenha && $email != "" && $senha != "" && $nome != ""){
    $SQL = "INSERT INTO USUARIO VALUES ('$email','$nome','$senha')";
    $salvar = mysqli_query($conexao,$SQL);

    $linhas = mysqli_affected_rows($conexao);
}

mysqli_close($conexao);

?>

<!doctype html>
<html lang="pt-br">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Prim Eventos</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>


    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../style.css" rel="stylesheet">
    </head>

    <body class="text-center" >
        
        <main style="padding:40px; color:aqua; font-size:25px">
            <h1>Confirmação de Cadastro</h1>
            <br>
            <?php 
                if($email == ""){
                    print "ERRO!<br>Email inválido!";
                }
                else if($nome == ""){
                    print "ERRO!<br>Nome inválido!";
                }
                else if($senha == ""){
                    print "ERRO!<br>Senha inválida!";
                }
                else if($senha != $rsenha){
                    print "ERRO!<br>Senhas inseridas são diferentes!";                                                   
                }
                else{
                    if($linhas == 1){                
                        print "Cadastro efetuado com sucesso!";         
                    }else{
                        print "Cadastro NÃO efetuado.<br>Já existe um usuário com este e-mail!";
                    }
                }
            ?>  
            <br><br><br><br>
            <button class="nav-item">
                <a class="nav-link active" href="../login.php">Voltar</a>
            </button>
        </main>
    </body>

</html>
