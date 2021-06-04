<!DOCTYPE html>
    <head>
        <?php
            $title = "Consulta de Chamados";

            require_once('autoload.php');
            require_once('head.php');
        ?>
    </head>
    <body>
        <div class='container-fluid'>
            <?php
                require_once('menu.php');
            ?>
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Data Abertura</th>
                            <th scope="col">Usuário Atual</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações Disponíves</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Alterar | Excluir </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>