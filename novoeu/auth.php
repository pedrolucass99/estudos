<?php 
require_once 'conexao.php';
session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$consulta = $conn->prepare("SELECT * FROM pessoa WHERE nome = ? AND senha = ?");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$senha);
$consulta->execute();

if ($consulta->rowCount() >= 1) {
	$res = $consulta->fetch(PDO::FETCH_ASSOC);
	$id = $res['id'];
	$_SESSION['user-logged'] =  $nome;
	$_SESSION['logado'] = true;

	header('location:inicio.php');
}else{
	header('location:login.php'); 
}

?>