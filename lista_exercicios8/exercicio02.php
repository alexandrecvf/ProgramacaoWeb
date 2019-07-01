<html>
<html>
<head>
	<title>Inserir</title>
</head>
<body>
	<?php
	
	include "index.php";

	?>
	
	<form action="inserirRegistro.php" method="post">
		<fieldset>
			<legend>Inserir Departamento</legend>
			<p><label for="codDepto">Código Departamento: </label> <input id="codDepto" type="number" name="codDepto" value=""></p>
			<p><label for="nome">Nome Departamento: </label> <input id="nome" type="text" name="nome" value=""></p>
			<p><label for="gerente">Gerente Departamento: </label> <input id="gerente" type="number" name="gerente" value=""></p>
			<p><label for="dataGerente">Data Gerente: </label> <input id="dataGerente" type="date" name="dataGerente" value=""></p>
			<p><input type="hidden" name="tabela"  value="departamento"></p>
			<p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
		</fieldset>
	</form>

	<form action="inserirRegistro.php" method="post">
		<fieldset>
			<legend>Inserir Dependente</legend>
			<p><label for="codEmp">Código Empregado: </label> <input id="codEmp" type="number" name="codEmp" value=""></p>
			<p><label for="nome">Nome: </label> <input id="nome" type="text" name="nome" value=""></p>
			<p><label for="sexo">Sexo: </label> <input id="sexo" type="text" name="sexo" value=""></p>
			<p><label for="dataNasc">Data Nascimento: </label> <input id="dataNasc" type="date" name="dataNasc" value=""></p>
			<p><label for="relacao">Relação: </label> <input id="relacao" type="text" name="relacao" value=""></p>
			<p><input type="hidden" name="tabela" value="dependente"></p>
			<p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
		</fieldset>
	</form>

	<form action="inserirRegistro.php" method="post">
		<fieldset>
			<legend>Inserir Empregado</legend>
			<p><label for="codEmp">Código Empregado: </label> <input id="codEmp" type="number" name="codEmp" value=""></p>
			<p><label for="nome">Nome: </label> <input id="nome" type="text" name="nome" value=""></p>
			<p><label for="dataNasc">Data Nascimento: </label> <input id="dataNasc" type="date" name="dataNasc" value=""></p>
			<p><label for="endereco">Endereço: </label> <input id="endereco" type="text" name="endereco" value=""></p>
			<p><label for="sexo">Sexo: </label> <input id="sexo" type="text" name="sexo" value=""></p>
			<p><label for="salario">Salario: </label> <input id="salario" type="text" name="salario" value=""></p>
			<p><label for="codSuperv">Código Supervisor: </label> <input id="codSuperv" type="number" name="codSuperv" value=""></p>
			<p><label for="codDepto">Código Departamento: </label> <input id="codDepto" type="number" name="codDepto" value=""></p>
			<p><input type="hidden" name="tabela" value="empregado"></p>
			<p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
		</fieldset>
	</form>

	<form action="inserirRegistro.php" method="post">
		<fieldset>
			<legend>Inserir Projeto</legend>
			<p><label for="codProj">Código Projeto: </label> <input id="codProj" type="number" name="codProj" value=""></p>
			<p><label for="titulo">Titulo: </label> <input id="titulo" type="text" name="titulo" value=""></p>
			<p><label for="codDepto">Código Departamento: </label> <input id="codDepto" type="number" name="codDepto" value=""></p>
			<p><input type="hidden" name="tabela" value="projeto"></p>
			<p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
		</fieldset>
	</form>

	<form action="inserirRegistro.php" method="post">
		<fieldset>
			<legend>Inserir Trabalha Em</legend>
			<p><label for="codEmp">Código Empregado: </label> <input id="codEmp" type="number" name="codEmp" value=""></p>
			<p><label for="codProj">Código Projeto: </label> <input id="codProj" type="number" name="codProj" value=""></p>
			<p><label for="horas">Horas: </label> <input id="horas" type="number" name="horas" value=""></p>
			<p><input type="hidden" name="tabela" value="trabalhaem"></p>
			<p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
		</fieldset>
	</form>

	
	
</body>
</html>

