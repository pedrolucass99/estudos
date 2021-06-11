<!DOCTYPE html>
<html>
<head>
	<title>Jogadores da Pelada</title>
</head>
<body>
	<form action="add.php" method="POST">
		<input type="text" name="nome" placeholder="jogador" required>
		<input type="password" name="senha" placeholder="senha" required>
		<select name="turma">
			<option value="Default">Selecionar</option>
			<option value="ipi">Ipi</option>
			<option value="logistica">Logistica</option>
		</select>
		<input type="submit" value="Enviar">
	</form>

</body>

</html>