<!DOCTYPE html>
<html>
<head>
	<title>Preco</title>
	<meta charset="UTF-8" />
	<script type="text/javascript">
		function gravar(valor, numero){
			var div = document.getElementById("divResultado");
			var total = valor*numero;
			div.innerText = total;
		}
	</script>
</head>
<body>
	<div>
		<label>Título:</label>
		<input type="text" id="txtTitulo"/>
		<label>Subtítulo:</label>
		<input type="number" id="txtSubtitulo" onclick="gravar(this.value, 3.00)"/>
		<button id="btnEnviar"  >Gravar</button>
	</div>
	<div id="divResultado">
	</div>
</body>
</html>