<?php
    //Variaveis em PHP

    $anoAtual = 2024;

    $anoNascimento = 2005;

    $idadePessoa = ($anoAtual - $anoNascimento);

    $alturaPessoa = 1.70; //floot

    $pesoPessoa = 70.3; //tipo de dado - floot

    $nomePessoa = "Lorena Oliveira"; // textos fica entre "aspas", tipo de dado - string

    echo "<h1 style='color:purple;'>Minha primeira aula de PHP!</h1>"; //echo = print para aparecer a imagem na tela 
   
    echo "<p>" . $nomePessoa . " nasceu no ano de " . $anoNascimento .//ponto significa concatenaçao
    ". Se ela ja fez aniversario neste ano de " . $anoAtual . ", ela possui " .
    ($anoAtual - $anoNascimento) . " anos de idade. </p>";

?>