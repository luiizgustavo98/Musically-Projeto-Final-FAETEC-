<?php
session_start();
require 'conexao.php';

$erro = '';


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email=trim($_POST['email']);
    $senha=$_POST['senha'];

        if($email===''){
            $erro="Preencha seu e-mail.";
            }
        elseif($senha===''){
            $erro="Preencha sua senha.";

        }   
          else {

          $statement=$connect->prepare("SELECT cod_cliente, nome_cliente, senha FROM cliente WHERE email_cliente = ?");
          $statement->bind_param( 's' , $email);  
          $statement->execute();
          $cliente = $statement->get_result()->fetch_assoc();
            
          if ($cliente && password_verify($senha , $cliente['senha'])) {   // 4
            $_SESSION['cod_cliente']  = $cliente['cod_cliente'];
            $_SESSION['nome_cliente'] = $cliente['nome_cliente'];
            header('Location: index.php');
           
            exit;
        }
        else {
            $erro = "E-mail ou senha incorretos.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | Musically</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/autenticacao.css">
</head>
<body>
  <video class="fundo-video" autoplay muted loop playsinline >
    <source src="arquivos/MJ.mp4" type="video/mp4">
</video>
    <form class="autenticacao-box" method="post">
        <h1>Entrar</h1>

        <?php if ($erro): ?>
            <p class="autenticacao-erro"><?= htmlspecialchars($erro) ?></p>
        <?php endif; ?>

        <label>E-mail</label>
        <input type="email" name="email" required>

        <label>Senha</label>
        <input type="password" name="senha" required>

        <button type="submit">Entrar</button>

        <p class="autenticacao-redirect">Não possui conta? <a href="cadastro.php">Cadastre-se</a></p>
    </form>
</body>
</html>