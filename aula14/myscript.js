function atualiza(){
	var valor = document.getElementById("slider1").value;
	document.getElementById("result").innerHTML = valor;
}

function mudaCor(){
	document.getElementById("container2").style.backgroundColor = "red";
}

function voltaCor(){
	document.getElementById("container2").style.backgroundColor = "green";
}