<?php

session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$cep = mysqli_real_escape_string($conexao, trim($_POST['cep']));
$logradouro = mysqli_real_escape_string($conexao, trim($_POST['logradouro']));
$numero = mysqli_real_escape_string($conexao, trim($_POST['numero']));
$complemento = mysqli_real_escape_string($conexao, trim($_POST['complemento']));
$bairro = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));

$sql = "select count(*) as total from tb_cadastro where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1)
{
  $_SESSION['usuario_existe'] = true;
  header('Location:cadastro.php');
  exit;
}

$sql = "INSERT INTO tb_cadastro (nome, sobrenome, email, senha, cep, logradouro, numero, complemento, bairro, cidade, estado) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$estado')";

if($conexao->query($sql) === TRUE)
{
  $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('location: cadastro.php');
exit;
?>