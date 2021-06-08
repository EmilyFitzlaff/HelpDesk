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
                <form method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Exemplos: Inconformidade de Software, Duvida, Consultoria, etc.">
                        <label for="descricao" required>Descrição</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Deixe sua observação aqui" name="observacao" id="observacao" style="height: 100px"></textarea>
                        <label for="observacao">Observação</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" value="cadastrar" name="acaoCadastrar">Cadastrar</button>
                    <button type="reset" class="btn btn-danger">Limpar Dados</button>
                </form>            
                <?php             
                    include_once('footer.php');

                    $oChamadoTipo = new Controller_ChamadoTipo();

                    if (isset($_POST['acaoCadastrar']) && $_POST['acaoCadastrar'] == 'cadastrar'){ 
                        try {

                            $oChamadoTipo->cadastrarChamadoTipo($_POST['descricao'], $_POST['observacao']);

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
                                    <p>Ocorreu um erro inesperado, entre em contato com o suporte.</p> 
                                </div>
                            <?php
                                echo "<em>Erro: {$erro->getMessage()}</em>";           
                        }
                    }
                ?>    
            </div>        
        </div>
    </body>
</html>