<?php 	
include_once "init.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$usuario = $_SESSION['user-logged'];
$cons = $conn->prepare("SELECT * FROM jogador WHERE nome ='$usuario'");
$cons->execute();
$res = $cons->fetch(PDO::FETCH_ASSOC);
$id = $res['id'];
 if (isset($_POST['delete'])) {
     $consulta = $conn->prepare("DELETE FROM jogador WHERE id='$id'");
     $consulta->execute();
     header('location: logout.php');
 } else {
     $consulta = $conn->prepare("UPDATE jogador SET nome='$nome', senha='$senha' WHERE id='$id'");
     $consulta->execute();
       $_SESSION['user-logged']= $_POST['nome'];
     header('location:index.php');
 }

?>
