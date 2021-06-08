<!DOCTYPE html>
    <head>
        <?php
            $title = "Excluir Tipo de Chamado";

            require_once('../autoload.php');
            require_once('head.php');
        ?>
    </head>
    <body>
        <div class='container-fluid'>
            <?php

                require_once('menu.php');

                if (isset($_GET['registro'])) {
                    $SQL = "SELECT * FROM chamadotipo WHERE id = {$_GET['registro']}";
                    $getDescricao = "SELECT descricao FROM chamadotipo WHERE id = {$_GET['registro']}";

                    $oChamadoTipo = new Controller_ChamadoTipo();

                    $conexao = new Conexao();  
                    $conexao->getSelect($SQL);    

                    $descricao = $conexao->getSelect($getDescricao); 
                }

            ?>
            <div class="container">
                <p class="lead mt-5">
                    <?php echo $title; ?>
                </p>
                <form method="POST">     
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Exemplos: Inconformidade de Software, Duvida, Consultoria, etc." value="<?php echo $descricao[0][0]?>" disabled>
                        <label for="descricao" required>Descrição</label>
                    </div>
                    <button type="submit" class="btn btn-danger" value="excluir" name="excluir">Excluir</button>
                </form>     

                <?php

                    $oChamadoTipo->deletarTipoChamado($_GET['registro']);
                
                ?>
            </div> 
        </div>
    </body>
</html>