<?php 
include"conexao.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$turma = $_POST['turma'];


$consulta=$conn->prepare("INSERT INTO jogador(nome,senha,turma) VALUES(?,?,?)");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$senha);
$consulta->bindParam(3,$turma);

$consulta->execute();


header('location:index.php');











 ?>