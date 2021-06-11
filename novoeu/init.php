<?php

session_start();
require_once 'conexao.php';


function is_logged() {
	return isset($_SESSION['user-logged']);
}
function logout() {
	unset($_SESSION['user-logged']);
	
}

function redirect($page) {
	header('location: ' . $page);
}
?>