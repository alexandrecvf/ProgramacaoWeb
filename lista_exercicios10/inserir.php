<html>
    <head>
    
    </head>
    
    <body>
        <?php
            $tabela = $_POST['dep'];
            if($tabela == 'departamento'){
                echo "<form action='inserir2.php' method='POST'>
                    <p><label for='codDept'>Código Departamento:</label><input id='codDepto' type='number' name='codDepto'></p>
                    <p><label for='nome'>Nome Departamento:</label><input id='nome' type='text' name='nome'></p>
                    <p><label for='gerente'>Gerente Departamento:</label><input id='gerente' type='number' name='gerente'></p>
                    <p><label for='dataGerente'>Data Gerente:</label><input id='dataGerente' type='date' name='dataGerente'></p>
                    <input type='hidden' value='departamento' name='dep'>
                    <p><input type='submit' value='Enviar'><input type='reset' value='Limpar'></p>
                </form>";
            }elseif($tabela == 'dependente'){
                echo "<form action='inserir2.php' method='POST'>
                    <p><label for='codEmp'>Código Empregado:</label><input id='codEmp' type='number' name='codEmp'></p>
                    <p><label for='nome'>Nome Dependente:</label><input id='nome' type='text' name='nome'></p>
                    <p><label for='sexo'>Sexo:</label><input id='sexo' type='text' name='sexo'></p>
                    <p><label for='dataNasc'>Data Nascimento:</label><input id='dataNasc' type='date' name='dataNasc'></p>
                    <p><label for='relacao'>Relação:</label><input id='relacao' type='text' name='relacao'></p>
                    <input type='hidden' value='dependente' name='dep'>
                    <p><input type='submit' value='Enviar'><input type='reset' value='Limpar'></p>
                </form>";
            }elseif($tabela == 'empregado'){
                echo "<form action='inserir2.php' method='POST'>
                    <p><label for='codEmp'>Código Empregado:</label><input id='codEmp' type='number' name='codEmp'></p>
                    <p><label for='nome'>Nome Empregado:</label><input id='nome' type='text' name='nome'></p>
                    <p><label for='dataNasc'>Data Nascimento:</label><input id='dataNasc' type='date' name='dataNasc'></p>
                    <p><label for='endereco'>Endereço:</label><input id='endereco' type='text' name='endereco'></p>
                    <p><label for='sexo'>Sexo:</label><input id='sexo' type='text' name='sexo'></p>
                    <p><label for='salario'>Salário:</label><input id='salario' type='number' name='salario'></p>
                    <p><label for='codSup'>Código Supervisor:</label><input id='codSup' type='number' name='codSup'></p>
                    <p><label for='codDepto'>Código Departamento:</label><input id='codDepto' type='number' name='codDepto'></p>
                    <input type='hidden' value='empregado' name='dep'>
                    <p><input type='submit' value='Enviar'><input type='reset' value='Limpar'></p>
                </form>";
            }elseif($tabela == 'trabalhaem'){
                echo "<form action='inserir2.php' method='POST'>
                    <p><label for='codEmp'>Código Empregado:</label><input id='codEmp' type='number' name='codEmp'></p>
                    <p><label for='codProj'>Código Projeto:</label><input id='codProj' type='number' name='codProj'></p>
                    <p><label for='horas'>Horas:</label><input id='horas' type='number' name='horas'></p>
                    <input type='hidden' value='trabalhaem' name='dep'>
                    <p><input type='submit' value='Enviar'><input type='reset' value='Limpar'></p>
                </form>";
            }
        ?>
    </body>

</html>
