<?php 
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty ($_POST['senha']))
{
  header('Location: cadastro.php');
  exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_cadastro, email from tb_cadastro where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1)
{
  $usuario_bd = mysqli_fetch_assoc($result);
  $_SESSION['email'] = $usuario_bd['email'];
  header('Location: sobre.php');
  exit();
}
else
{
  $_SESSION['nao_autenticado'] = true;
  header('Location: cadastro.php');
  exit();
}

?>