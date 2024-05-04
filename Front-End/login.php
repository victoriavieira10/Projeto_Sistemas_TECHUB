<?php 

session_start();

include('conexao.php');

if(empty($_POST['email_login']) || empty ($_POST['senha_login']))
{
  header('Location: index.php');
  exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email_login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha_login']);

$querry = "SELECT email from tb_cadastro where email = '{$email_login}' and senha = md5('{$senha_login}')";

$result = mysqli_query($conexao, $querry);

$row = mysqli_num_rows($result);

if($row == 1)
{
  $usuario_bd = mysqli_fetch_assoc($result);
  $_SESSION['email_login'] = $usuario_bd['email'];
  header('Location: painel.php');
}
else
{
  $_SESSION['nao_autenticado'] = true;
  header('Location: index.php');
  exit();
}

?>