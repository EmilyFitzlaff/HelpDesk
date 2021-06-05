<!DOCTYPE html>
    <head>
        <?php
            $title = "Página Inicial";

            require_once('../autoload.php');
            require_once('head.php');
        ?>
    </head>
    <body>
        <div class='container-fluid'>
            <?php
                require_once('menu.php');
            ?>
            <div class="container mt-5">
                <p class="lead">
                    Bem-vindo ao Helpdesk!
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Abrir Chamado</h5>
                                <p class="card-text">Clique no botão abaixo e acesso formulário para abertura de um novo chamado.</p>
                                <a href="#" class="btn btn-success">Abrir Chamado</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Consultar Chamados</h5>
                                <p class="card-text">Clique no botão abaixo e consulte os chamados abertos.</p>
                                <a href="#" class="btn btn-primary">Consultar Chamados</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>