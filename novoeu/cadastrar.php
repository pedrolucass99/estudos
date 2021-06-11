<?php 
include"conexao.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$consulta=$conn->prepare("INSERT INTO pessoa(nome,senha) VALUES(?,?)");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$senha);


$consulta->execute();


header('location:form_cadas.php');











 ?>