<!DOCTYPE html>
    <head>
        <?php
            $title = "Consulta Situações";

            require_once('../autoload.php');
            require_once('head.php');
        ?>
    </head>
    <body>
        <div class='container-fluid'>
            <?php
                require_once('menu.php');

                $situacao = new Controller_Situacao();

                $aDados = $situacao->returnSelectAll();
            ?>
            <div class="container">
                <?php
                    if(empty($aDados)) {
                        echo setVazio();
                    } else {
                ?>
                <p class="lead mt-5">
                    <?php echo $title; ?>
                </p>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Chamado?</th>
                            <th scope="col">Tipo de Chamado?</th>
                            <th scope="col">Módulo?</th>
                            <th scope="col">Usuário?</th>
                            <th scope="col">Privilégio?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aDados as $oObjeto) { ?>
                        <tr>
                            <td><?php echo $oObjeto->getId(); ?></td>
                            <td><?php echo $oObjeto->getDescricao(); ?></td>
                            <td><?php echo trueOrFalse($oObjeto->getEhChamado()); ?></td>
                            <td><?php echo trueOrFalse($oObjeto->getEhChamadoTipo()); ?></td>
                            <td><?php echo trueOrFalse($oObjeto->getEhModulo()); ?></td>
                            <td><?php echo trueOrFalse($oObjeto->getEhUsuario()); ?></td>
                            <td><?php echo trueOrFalse($oObjeto->getEhUsuarioPrivilegio()); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php } ?>
        </div>
    </body>
</html>