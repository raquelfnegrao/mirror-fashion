<?php
$cabecalho_title = "Mirror Fashion";
include("cabecalho.php");
?>
<link rel="stylesheet" href="css/produto.css">
	<body>
	<?php $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">'; ?>
	<div class="produto-back">
	<div class="conteiner">
	<div class="produto">
	<h1>Blusa Basic</h1>
		<p>por apenas R$ 19,00</p>
			<form action="checkout.php" method="POST">
			<input type="hidden" name="nome" value="Blusa Basic">
			<input type="hidden" name="preco" value="19,00">
				<fieldset class="cores">
				<legend>Escolha a cor:</legend>
					<input type="radio" name="produto" value="verde" id="verde" checked>
					<label for="verde">
					<img src="img/produtos/foto7-verde.png" alt="verde">
					</label>

					<input type="radio" name="produto" value="rosa" id="rosa">
					<label for="rosa">
					<img src="img/produtos/foto7-rosa.png" alt="rosa">
					</label>

					<input type="radio" name="produto" value="azul" id="azul">
					<label for="azul">
					<img src="img/produtos/foto7-azul.png" alt="azul">
					</label>
				</fieldset>
				<fieldset class="tamanhos">
					<legend>Escolha o tamanho:</legend>
					<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
				</fieldset>
				<input type="submit" class="comprar" value="Comprar">
			</form>
</div>
	</div>
	<div class="detalhes">
		<h2>Detalhes do produto</h2>
		<p>Esse é o melhor Blusa que você já viu. Excelente
material italiano com estampa desenhada pelos artesãos da
comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
mesmo pela nossa entrega a jato.</p>
		<table>
			<thead>
				<tr>
				<th>Característica</th>
				<th>Detalhe</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>Modelo</td>
				<td>Blusa basic 7845</td>
				</tr>
				<tr>
				<td>Material</td>
				<td>Algodão e poliester</td>
				</tr>
				<tr>
				<td>Cores</td>
				<td>Azul, Rosa e Verde</td>
				</tr>
				<tr>
				<td>Lavagem</td>
				<td>Lavar a mão</td>
				<tr>
			</tbody>
		</table>
	</div>
	</div>
		<?php include("rodape.php"); ?>
	</body>