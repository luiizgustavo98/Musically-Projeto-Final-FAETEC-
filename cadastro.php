<?php 
session_start();
require 'conexao.php';



$erro = '';




if($_SERVER['REQUEST_METHOD'] === 'POST') {

$nome=trim($_POST['nome']);
$cpf=trim($_POST['cpf']);
$email=trim($_POST['email']);
$telefone=trim($_POST['telefone']);
$senha=$_POST['senha'];
$confirmar=$_POST['confirmar'];

if($nome === '') {

    $erro="Preencha o nome!";
}
elseif($cpf==='') {
$erro="Preencha o CPF!";
}
elseif($email==='') {
    $erro="Preencha o email!";
}
elseif($senha==='') {
    $erro="Preencha a senha!";

}
elseif($confirmar===''){
    $erro="Confirme sua senha!";
}
    elseif ($senha !== $confirmar) {
    $erro = 'As senhas não conferem.';
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erro = "E-mail inválido!";
}
elseif (strlen($senha) < 6) {
    $erro = "A senha deve ter pelo menos 6 caracteres!";
}
elseif ($senha !== $confirmar) {
    $erro = "As senhas não conferem.";
}
        else {
            $statement=$connect->prepare("SELECT cod_cliente from cliente where email_cliente = ? OR cpf_cliente = ?");
            $statement->bind_param('ss', $email, $cpf);
            $statement->execute();
            $resultado = $statement->get_result();

        
        if ($resultado->num_rows > 0) {
        $erro = "Dados já cadastrados!!" ;
    }
    
    else {
    
        $hash=password_hash($senha, PASSWORD_DEFAULT);
        $stmt = $connect->prepare("INSERT INTO cliente (nome_cliente, cpf_cliente, tel_cliente, email_cliente, senha) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param( 'sssss' , $nome, $cpf, $telefone, $email, $hash);
        $stmt->execute();
        $_SESSION['cod_cliente']  = $connect->insert_id;
        $_SESSION['nome_cliente'] = $nome;
        header('Location: index.php');
        exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Musically</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/autenticacao.css">
</head>
<body>
   <video class="fundo-video" autoplay muted loop playsinline >
    <source src="arquivos/MJ.mp4" type="video/mp4">
</video>
 
    <form class="autenticacao-box" method="post">
        <h1>Criar conta</h1>
 
        <?php if ($erro): ?>
            <p class="autenticacao-erro"><?= htmlspecialchars($erro) ?></p>
        <?php endif; ?>
 
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"  required>
 
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" maxlength="14" required>
 
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone">
 
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
 
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" minlength="6" required>
 
        <label for="confirmar">Confirmar senha</label>
        <input type="password" id="confirmar" name="confirmar" required>
 
        <button type="submit">Cadastrar</button>
 
        <p class="autenticacao-redirect">Já possui conta? <a href="login.php">Entrar</a></p>
    </form>
</body>
</html>