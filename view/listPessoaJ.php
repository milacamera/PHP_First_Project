<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$pjs = $_REQUEST['pjs'];
$pessoasJBD = $_REQUEST['pjsBD'];
$pjsdb = new cPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Lista Pessoas Jurídicas</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Nome Fantasia</th>
                <th>CNPJ</th>
                <th>Funções</th>
            </tr>
            <!--
            <?php
            // put your code here
            foreach ($pjs as $pj):
                ?>
                <tr>
                    <td><?php //echo $pj->getNomeFantasia(); ?></td>
                    <td><?php //echo $pj->getCnpj(); ?></td>
                        </tr>
            <?php endforeach; ?>
            -->
            <!-- NOva Tabela a partir do BD -->
            <?php
            if ($pessoasJBD == null) {
                echo "Tabela vazia!";
            } else {
                foreach ($pessoasJBD as $pj):
                    ?>
                    <tr>
                        <td><?php echo $pj['nome']; ?></td>
                        <td><?php echo $pj['nomeFantasia']; ?></td>
                        <td><?php echo $pj['cnpj']; ?></td>
                        <td>
                            <form action="editPessoaJ.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $pj['idPessoa']; ?>"/>
                                <input type="submit" name="update" value="Editar"/>
                            </form>
                            <form action="<?php $pjsdb->funcoes(); ?>" method="POST">
                                <input type="hidden" name="id" value="<?php echo $pj['idPessoa']; ?>"/>
                                <input type="submit" name="delete" value="Deletar"/>
                            </form>
                        </td>
                    </tr>
                    <?php
                endforeach;
            }
            ?>
        </table>
    </body>
</html>
