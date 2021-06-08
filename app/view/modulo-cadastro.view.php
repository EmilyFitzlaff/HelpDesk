<!DOCTYPE html>
    <head>
        <?php
            $title = "Cadastrar Módulos";

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
                <form method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="name@example.com">
                        <label for="floatingInput">Descrição</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="sigla" name="sigla" placeholder="name@example.com">
                        <label for="floatingInput">Sigla</label>
                    </div>

                    <?php
                        $oUsuario = new Controller_Usuario();
                        echo "<pre>";
                        var_dump($oUsuario->MontaSelectUsuario());
                        
                    ?>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Usuário Responsável</label>
                        <select class="form-select" id="responsavel" name="responsavel">
                            <option selected disabled>Selecione...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" value="cadastrar" name="acaoCadastrar">Cadastrar</button>
                    <button type="reset" class="btn btn-danger">Limpar Dados</button>
                </form>
            </div>
            <?php             
                include_once('footer.php');

                $oModulo = new Controller_Modulo();

                if (isset($_POST['acaoCadastrar']) && $_POST['acaoCadastrar'] == 'cadastrar'){ 
                    try {

                        $oModulo->cadastrarModulo($_POST['descricao'], $_POST['sigla'], $_POST['responsavel']);

                        ?>
                            <br>
                            <div class="alert alert-success" role="alert">
                                Tipo de Chamado cadastrado com sucesso!

                            </div>
                        <?php
                    } catch (PDOException $erro) {
                        ?>
                            <br>
                            <div class="alert alert-danger" role="alert">
                                <spanp>Ocorreu um erro inesperado, entre em contato com o suporte.</span> 
                            </div>
                        <?php
                            echo "<em>Erro: {$erro->getMessage()}</em>";           
                    }
                }
            ?>            
        </div>
    </body>
</html>