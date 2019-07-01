function esconderMostrar(e) {
	var status = document.getElementById(e).style.display;

	if(!status || status == "block"){
		document.getElementById(e).style.display = "none";
	} else{
		document.getElementById(e).style.display = "block";
	}
}

function addP(){
	var paragrafo = document.createElement("p"); //cria o elemento P
	var conteudo = document.getElementById("inp1").value;
	var texto = document.createTextNode(conteudo); //adiciona um conteúdo ao elemento criado

	paragrafo.appendChild(texto); // conecta o conteúdo ao elemento

	var div1 = document.getElementById("div1");
	//div1.appendChild(paragrafo); // conecta o elemento a um elemento pai na ultima posição

	var ultimop = document.getElementById("p4");
	div1.insertBefore(paragrafo, ultimop); // insere elemento a um elemento pai antes de algum outro elemento
}

function alterar(){
	document.getElementById("txt1").style.display = "none";
	document.getElementById("cx1").style.display = "inline";

	var texto = document.getElementById("txt1").innerHTML;
	document.getElementById("inp2").value = texto;
}

function atualizar(){
	document.getElementById("txt1").style.display = "inline";
	document.getElementById("cx1").style.display = "none";

	var texto = document.getElementById("inp2").value;
	document.getElementById("txt1").innerHTML = texto;
}