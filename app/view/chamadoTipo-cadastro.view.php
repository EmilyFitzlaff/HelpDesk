<!DOCTYPE html>
    <head>
        <?php
            $title = "Cadastrar Tipos de Chamados";

            require_once('../autoload.php');
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
                    <?php echo $title; ?>
                </p>
                
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Descrição</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Observação</label>
                </div>
                <br>
                <fieldset disabled>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Data Cadastro</span>
                        <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </fieldset>
                <button type="button" class="btn btn-success">Cadastrar</button>
                <button type="button" class="btn btn-danger">Limpar Dados</button>
            </div>
            <?php             
                include_once('footer.php');
            ?>            
        </div>
    </body>
</html>