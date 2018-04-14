<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>
						idCliente	
					</th>
					<th>
						Nome
					</th>
					<th>
						Sobrenome
					</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($clientes as $cliente): ?>
				<tr>
					<td>
						<?php echo $cliente->idCliente; ?>
					</td>
					<td>
						<?php echo $cliente->nome; ?>
					</td>
					<td>
						<?php echo $cliente->sobrenome; ?>
					</td>
					<td>
						<a href="<?php echo base_url();?>cliente/<?php echo $cliente->idCliente; ?>">detalhes</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>