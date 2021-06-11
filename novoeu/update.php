<?php 	
include_once "init.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$usuario = $_SESSION['user-logged'];
$cons = $conn->prepare("SELECT * FROM pessoa WHERE nome ='$usuario'");
$cons->execute();
$res = $cons->fetch(PDO::FETCH_ASSOC);
$id = $res['id'];
 if (isset($_POST['delete'])) {
     $consulta = $conn->prepare("DELETE FROM pessoa WHERE id='$id'");
     $consulta->execute();
     header('location: login.php');
 } else {
     $consulta = $conn->prepare("UPDATE pessoa SET nome='$nome', senha='$senha' WHERE id='$id'");
     $consulta->execute();
       $_SESSION['user-logged']= $_POST['nome'];
     header('location:inicio.php');
 }

?>
