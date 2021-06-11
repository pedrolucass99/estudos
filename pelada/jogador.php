<!DOCTYPE html>
<html>
<head>
	<title>Jogadores</title>
	<link rel="stylesheet" type="text/css" href="jogador.css">
</head>
				<?php
				include "init.php";
				include "conexao.php";
			$sql ='SELECT * FROM jogador';
			$result = $conn->query($sql);
		?>
		<div class="container">
			<div class="row">
				<h2>Participantes</h2>
			</div>
			<form action="pesquisa.php" method="POST">
		<input type="text" name="buscar" placeholder="Pesquise pelo nome do peladeiro">
		<input type="submit">
	</form


			<div class="row">

				<div class='col-sm-8 col-md-8'>


					<table class='table'  id="customers">
						<thead>
							<tr>
								
								<th>Nome</th>
								<th>turma</th>
	                
							</tr>
						</thead>
						<tbody id="tbt">

								<?php while($res = $result->fetch(PDO::FETCH_ASSOC)) { ?>
								<tr>
									<td><?= $res['nome'] ?></td>
									<td><?= $res['turma'] ?></td>
									
								</tr> 
								<?php } ?>

						</tbody>
					</table>
					<a href="index.php">menu</a>

				</div>


			</div>


			</div>