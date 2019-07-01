function mudarTexto(){
	document.getElementById("texto1").innerHTML = "Alexandre de Cássio Vilarinho Filho";
}

function mudarParagrafos(){
	var par1 = document.getElementById("paragrafo1").innerHTML;
	var par2 = document.getElementById("paragrafo2").innerHTML;

	document.getElementById("paragrafo1").innerHTML = par2;
	document.getElementById("paragrafo2").innerHTML = par1;
}

function acender() {
    document.getElementById('lamp').src = 'pic_bulbon.gif';
}

function desligar() {
    document.getElementById('lamp').src = 'pic_bulboff.gif';
}

function colocarZebrado() {
    var y = document.getElementsByTagName("tr");
    var i;
    for (i = 0; i < y.length; i++) {
        if (i % 2 != 0) {
            y[i].style.backgroundColor = "grey";
        }
    }
}

function tirarZebrado() {
    var y = document.getElementsByTagName("tr");
    var i;
    for (i = 0; i < y.length; i++) {
        if (i % 2 != 0) {
            y[i].style.backgroundColor = "initial";
        }
    }
}

function changeConteudo() {
    var texto = document.getElementById("cx1").value;
    document.getElementById("conteudo1").innerHTML = texto;
}

function changeFonte() {
    document.getElementById("conteudo11").style.color = "white";
    document.getElementById("conteudo21").style.color = "white";
    document.getElementById("conteudo31").style.color = "white";

}

function changeCor() {
    document.getElementById("conteudo11").style.backgroundColor = "black";
    document.getElementById("conteudo21").style.backgroundColor = "black";
    document.getElementById("conteudo31").style.backgroundColor = "black";

}
