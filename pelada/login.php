<?php 
include "index.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="auth.php" method="POST">
	<input type="text" name="nome">
	<input type="password" name="senha">
	<input type="submit" value="enivar">
	</form>
</body>
</html>