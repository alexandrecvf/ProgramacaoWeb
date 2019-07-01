function esconderMostrar(e) {
	var status = document.getElementById(e).style.display;

	if(!status || status == "block"){
		document.getElementById(e).style.display = "none";
	} else{
		document.getElementById(e).style.display = "block";
	}
}

function addLi(){
	var item = document.createElement("li"); //cria o elemento P
	var conteudo = document.getElementById("inpTexto").value;
	var texto = document.createTextNode(conteudo); //adiciona um conteúdo ao elemento criado

	item.appendChild(texto); // conecta o conteúdo ao elemento

	var div1 = document.getElementById("lista");
}

function addtarefas(){
    var cont = document.getElementById("cont").value;
    var linha = document.createElement("tr");
    var tarefa = document.createElement("td");
    var lixo = document.createElement("td");
    var bolinha = document.createElement("td");
    var conteudo = document.getElementById("inp1").value;
       
    var att = document.createAttribute("id");
    att.value = "tarefa" + cont;
    tarefa.setAttributeNode(att);
    
    var att = document.createAttribute("id");
    att.value = "linha" + cont;
    linha.setAttributeNode(att);   
    
    var bolinha1 = document.createElement("i");
    var att = document.createAttribute("class");
    att.value = "far fa-circle";
    var att2 = document.createAttribute("id");
    att2.value = cont;
    var att3 = document.createAttribute("onclick")
    att3.value = "riscarTarefa()";
    bolinha1.setAttributeNode(att);
    bolinha1.setAttributeNode(att2);
    bolinha1.setAttributeNode(att3);
    
    var lixo1 = document.createElement("i");
    var att = document.createAttribute("class");
    att.value = "fas fa-trash-alt";
    var att2 = document.createAttribute("name");
    att2.value = cont;
    var att3 = document.createAttribute("onclick")
    att3.value = "delTarefa()";
    lixo1.setAttributeNode(att);
    lixo1.setAttributeNode(att2);
    lixo1.setAttributeNode(att3);
    
    var texto = document.createTextNode(conteudo);
    
    tarefa.appendChild(texto);
    lixo.appendChild(lixo1);
    bolinha.appendChild(bolinha1);
    
    linha.appendChild(bolinha);
    linha.appendChild(tarefa);
    linha.appendChild(lixo);
    
    var tabela = document.getElementById("t01");
    tabela.appendChild(linha);
    var aux = parseInt(cont) + 1;
    console.log(aux);
    document.getElementById("cont").value = aux;
}

function riscarTarefa(){ 
	var el = document.getElementById("t01");
   	
   	el.addEventListener('click', function(e) {
        var status = document.getElementById("tarefa"+e.target.id).style.textDecoration;
        var bo = document.getElementById(e.target.id);
        var linha

        if (status == "line-through") {
            document.getElementById("tarefa"+e.target.id).style.textDecoration = "none";
            bo.setAttribute("class","far fa-circle");
        }else{
            document.getElementById("tarefa"+e.target.id).style.textDecoration = "line-through";
            bo.setAttribute("class","far fa-check-circle");
        } 
    });
}

function delTarefa(){
    var el = document.getElementById("t01");
    el.addEventListener('click', function(e) {
        console.log(e.target.getAttribute('name'));
        
        var status = document.getElementById("linha"+e.target.getAttribute('name'));
        document.getElementById("linha"+e.target.getAttribute('name')).style.display = "none";
    });
}

function alterar(txt,cx,inp){
    document.getElementById(txt).style.display = "none";
    document.getElementById(cx).style.display = "inline";
    var texto = document.getElementById(txt).innerHTML;
    document.getElementById(inp).value = texto;   
}

function atualizar(txt,cx,inp){
    document.getElementById(txt).style.display = "inline";
    document.getElementById(cx).style.display = "none";
    var texto = document.getElementById(inp).value;
    if(texto == ""){
        texto = "Insira novo texto";
    }
    document.getElementById(txt).innerHTML = texto;
}