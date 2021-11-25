<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cPessoaJ.php';
$cadPJs = new cPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ger. Pessoa Jurídica</title>
    </head>
    <body>
        <h1>Ger. Pessoa Jurídica</h1>
        <a href="../index.php">Voltar</a>
        <br><br>
        <form method="POST" action="<?php $cadPJs->inserirBD(); ?>">
            <input type="text" name="nome" required placeholder="Nome aqui..."/>
            <br><br>
            <input type="tel" name="tel" required placeholder="Telefone aqui..."/>
            <br><br>
            <input type="email" name="email" required placeholder="E-mail aqui..."/>
            <br><br>
            <input type="text" name="endereco" required placeholder="Enderço aqui..."/>
            <br><br>
            <input type="number" name="cnpj" required placeholder="CNPJ aqui..."/>
            <br><br>
            <input type="text" name="nomeFantasia" required placeholder="Nome fantasia aqui..."/>
            <br><br>
            <input type="submit" name="salvarPJ" value="Salvar">
            <input type="reset" name="limpar" value="Limpar">
        </form>        
        <?php
        // put your code here
        $cadPJs->getAllPJ();
        ?>
    </body>
</html>
