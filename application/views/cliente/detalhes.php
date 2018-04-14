<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
</head>
<body>
	
	<h4><b>Nome:</b> <?php echo $detalhes[0]->nome; ?></h4>
	<h4><b>Sobrenome:</b> <?php echo $detalhes[0]->sobrenome; ?></h4>

	<h2>Endereços</h1>
		<?php foreach($detalhes['enderecos'] as $endereco): ?>
			<h4>Cep: <?php echo $endereco->cep;?></h4>
			<h4>Rua: <?php echo $endereco->rua;?></h4>
			<h4>Bairro: <?php echo $endereco->bairro;?></h4>
			<br>
		<?php endforeach; ?>
	<hr>

	<h2>Telefones</h1>
		<?php foreach($detalhes['telefones'] as $telefone): ?>
			<h4>Telefone: <?php echo $telefone->numero;?></h4>
			<h4>Tipo: <?php echo $telefone->tipo;?></h4>
			<br>
		<?php endforeach; ?>
	<hr>

</body>
</html>