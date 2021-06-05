<!DOCTYPE html>
    <head>
        <?php
            $title = "Consulta Usuários";

            require_once('../autoload.php');
            require_once('head.php');
        ?>
    </head>
    <body>
        <div class='container-fluid'>
            <?php
                require_once('menu.php');

                $usuario = new Controller_Usuario();

                $aDados = $usuario->returnSelectAll();
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
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data Cadastro</th>
                            <th scope="col">Privilégio</th>
                            <th scope="col">Ações Disponíveis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aDados as $oObjeto) { ?>
                        <tr>
                            <td><?php echo $oObjeto->getId(); ?></td>
                            <td><?php echo $oObjeto->getApelido(); ?></td>
                            <td><?php echo $oObjeto->getEmail(); ?></td>
                            <td><?php echo $oObjeto->getDataCadastro(); ?></td>
                            <td><?php echo $oObjeto->getPrivilegio()->getDescricao(); ?></td>
                            <td>Alterar | Excluir</td>
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