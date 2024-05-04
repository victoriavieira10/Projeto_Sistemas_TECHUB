<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'cadastro');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

/*
session_start();

// Conexão com o banco de dados
$servidor = "localhost";
$username = "root";
$password = "";
$database = "cadastro";

// Cria a conexão
$conn = mysqli_connect($servidor, $username, $password, $database);


      $nome = $_POST['nome'];
      $sobrenome = $_POST['sobrenome'];
      //$email = $_POST['email'];
      //$senha = $_POST['senha'];
      $cep = $_POST['cep'];
      //$logradouro = $_POST['logradouro'];
      $numero = $_POST['numero'];
      $complemento = $_POST['complemento'];
      //$bairro = $_POST['bairro'];
      //$cidade = $_POST['cidade'];
      //$estado = $_POST['estado'];

$result_cadastro = "INSERT INTO tb_cadastro (nome, sobrenome, email, senha, cep, logradouro, numero, complemento, bairro, cidade, estado) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$cep', '$logradouro' '$numero', '$complemento', '$bairro', '$cidade', '$estado')";
$resultado_cadastro = mysqli_query($conn, $result_cadastro);

if(mysqli_insert_id($conn))
{
  $_SESSION['msg'] = "<p style='color:white;'>Usuário cadastrado com sucesso</p>";
  header("Location: index.php");
}
else
{
  $_SESSION['msg'] = "<p style='color:red;'>Não foi possivel cadastrar o usuário</p>";
  header("Location: index.php");
}



if($conn->connect_errno)
{
  echo "Erro";
}
else
{
  echo "Conexão efetuada com sucesso";
}
*/

?>