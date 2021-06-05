<!DOCTYPE html>
    <head>
        <?php
            $title = "Consulta Módulos";

            require_once('../autoload.php');
            require_once('head.php');
        ?>
    </head>
    <body>
        <div class='container-fluid'>
            <?php
                require_once('menu.php');

                $modulo = new Controller_Modulo();

                $aDados = $modulo->returnSelectAll();
            ?>
            <div class="container">
                <p class="lead mt-5">
                    <?php echo $title; ?>
                </p>
                <?php
                    if(empty($aDados)) {
                        echo setVazio();
                    } else {
                ?>                
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Sigla</th>
                            <th scope="col">Data Cadastro</th>
                            <th scope="col">Responsável</th>
                            <th scope="col">Ações Disponíves</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aDados as $oObjeto) { ?>
                        <tr>
                            <td><?php echo $oObjeto->getId(); ?></td>
                            <td><?php echo $oObjeto->getDescricao(); ?></td>
                            <td><?php echo $oObjeto->getSigla(); ?></td>
                            <td><?php echo $oObjeto->getDataCadastro(); ?></td>
                            <td><?php echo $oObjeto->getUsuarioResponsavel()->getApelido(); ?></td>
                            <td>Alterar | Excluir </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php } 
                include_once('footer.php');
            ?>
        </div>
    </body>
</html>