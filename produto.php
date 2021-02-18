<?php
$cabecalho_title = "Mirror Fashion";
include("cabecalho.php");
?>
<link rel="stylesheet" href="css/produto.css">
<body>
		<div class="produto-back">
		<div class="container">
		<div class="produto">
			<h1>Blusa Caveira</h1>
			<p>por apenas R$ 29,00</p>
		<form action="checkout.php" method="POST">
			<input type="hidden" name="nome" value="Blusa Caveira">
			<input type="hidden" name="preco" value="29,00">	
			<fieldset class="cores">
				<legend>Escolha a cor:</legend>
				<input type="radio" name="cor" value="verde" id="verde" checked>
				<label for="verde">
				<img src="img/produtos/foto2-verde.png" alt="verde">
				</label>
				<input type="radio" name="cor" value="rosa" id="rosa">
				<label for="rosa">
				<img src="img/produtos/foto2-rosa.png" alt="rosa">
				</label>
				<input type="radio" name="cor" value="azul" id="azul">
				<label for="azul">
				<img src="img/produtos/foto2-azul.png" alt="azul">
				</label>
			</fieldset>
			<fieldset class="tamanhos">
				<legend>Escolha o tamanho:</legend>
				<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
				<output for="tamanho" name="valortamanho">42</output>
			</fieldset>
				<input type="submit" class="comprar" value="Comprar">
			</form>
		</div>
		<div class="detalhes">
			<h2>Detalhes do produto</h2>
			<p>Esse é o melhor casaco que você irá comprar na sua vida.</p>
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
					<td>Colar 7845</td>
				</tr>
				<tr>
					<td>Material</td>
					<td>Ouro e prata</td>
				</tr>
				<tr>
					<td>Cores</td>
					<td>Azul, Vermalho e Verde</td>
				</tr>
			</tbody>
			</table>
		</div>
		</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/produto.js"></script>
		<?php include("rodape.php"); ?>
	</body>
</html>