<!DOCTYPE html>
    <head>
        <?php
            $title = "Consulta Tipos de Chamados";

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
                <p class="lead mt-5">
                    Consultar Tipos de Chamados
                </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Observação</th>
                            <th scope="col">Data Cadastro</th>
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