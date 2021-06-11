	<!DOCTYPE html>
	<html>
	<head>
		<title>Pesquisar</title>
		<link rel="stylesheet" type="text/css" href="jogador.css">
	</head>
	<body>
	
	
	<?php
	include"conexao.php";
		if (isset($_POST['buscar'])) {
			$buscar = $_POST['buscar'];
		
			$sql= "SELECT * FROM jogador WHERE nome ='$buscar'";
			$result = $conn->query($sql);
		?>
		<div class="container">
			<div class="row">
				<h2>Lista de Produtos</h2>
			</div>


			<div class="row">

				<div class='col-sm-8 col-md-8'>


					<table class='table' id="customers">
						<thead>
							<tr>
								<!-- <th>Escopo</th> -->
								<th>nome</th>
								<th>turma</th>	                
							</tr>
						</thead>
						<tbody>							
								<?php while($res = $result->fetch(PDO::FETCH_ASSOC)) { ?>
								<tr>
									<td><?= $res['nome'] ?></td>
									<td><?= $res['turma'] ?></td>
								</tr> 
								<?php }} ?>

						</tbody>
					</table>

				</div>


			</div>


			</div>
		<br><br><br>
			<button>
				<a href="jogador.php">voltar pra tabela</a>
			</button>
			<button>
				<a href="index.php">menu</a>
			</button>


</body>
</html>
