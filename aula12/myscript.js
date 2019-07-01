function mudarTexto(){
	document.getElementById("conteudo1").innerHTML = "Mudar conteúdo HTML";
}

function mudarAtributo(){
	document.getElementById("imagem1").src = "Tony2.jpeg";
	var arquivo = document.getElementById("imagem1").src;
	document.getElementById("resposta").innerHTML = arquivo;
	console.log(arquivo);
	window.alert(arquivo);
}

function mudarCor(){
	document.getElementById("titulo1").style.color = "red";
}

function exibirImagem(){
	document.getElementById("imagem1").style.display = "block";
}

function ocultarImagem(){
	document.getElementById("imagem1").style.display = "none";
}

function substituir(){
	var texto = document.getElementById("cx1").value;
	document.getElementById("titulo1").innerHTML = texto;
}