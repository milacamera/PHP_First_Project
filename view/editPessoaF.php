<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$pesUp = $_REQUEST['pfUpdate'];
$pfBD = new cPessoaF();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Pessoa Fisíca</title>
    </head>
    <body>
        <h3>Editar Pessoa Fisíca</h3>
        <form method="POST" action="<?php  ?>">
            <input type="hidden" name="idPessoa" value="<?php foreach ($pesUp as $pf):echo $pf['idPessoa'];endforeach;?>"/>
            <input type="text" name="nome" required value="<?php foreach ($pesUp as $pf):echo $pf['nome'];endforeach;?>"/>
            <br><br>
            <input type="tel" name="tel" required value="<?php foreach ($pesUp as $pf):echo $pf['telefone'];endforeach; ?>"/>
            <br><br>
            <input type="email" name="email" required value="<?php foreach ($pesUp as $pf):echo $pf['email'];endforeach; ?>"/>
            <br><br>
            <input type="text" name="endereco" required value="<?php foreach ($pesUp as $pf):echo $pf['endereco'];endforeach; ?>"/>
            <br><br>
            <input type="number" name="cpf" required value="<?php foreach ($pesUp as $pf):echo $pf['cpf'];endforeach; ?>"/>
            <br><br>
            <input type="radio" name="sexo"
                   <?php foreach ($pesUp as $pf):if($pf['sexo']=="F"){echo "checked";};endforeach; ?>
                   required value="F">Feminino
            <input type="radio" name="sexo"
                   <?php foreach ($pesUp as $pf):if($pf['sexo']=="M"){echo "checked";};endforeach; ?>
                   required value="M">Masculino
            <br><br>
            <input type="submit" name="salvarPF" value="Salvar">
            <input type="reset" name="limpar" value="Limpar">
        </form> 
        <?php
        // put your code here
        ?>
    </body>
</html>
