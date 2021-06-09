<!DOCTYPE html>
    <head>
        <?php
            $title = "Alterar Tipo de Chamado";

            require_once('../autoload.php');
            require_once('head.php');
        ?>
    </head>
    <body>
        <div class='container-fluid'>
            <?php

                require_once('menu.php');

                if (isset($_GET['registro'])) {
                    $stmt = Connection::Conectar()->prepare("SELECT * FROM chamadotipo WHERE id = :id");
            
                    $stmt->bindParam(':id', $_GET['registro']);
            
                    $stmt->execute();
                    
                    $resultado = $stmt->fetchAll();   
                }
            
                if(isset($_POST['descricao']) || isset($_POST['observacao'])) {
                    $oChamadoTipo = new Controller_ChamadoTipo();
                    $oChamadoTipo->AlterarChamadoTipo($_GET['registro'], $_POST['descricao'], $_POST['observacao']);
                }

            ?>
            <div class="container">
                <p class="lead mt-5">
                    <?php echo $title; ?>
                </p>
                <form method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Exemplos: Inconformidade de Software, Duvida, Consultoria, etc." value="<?php echo $resultado[0]['descricao']?>">
                        <label for="descricao" required>Descrição</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Deixe sua observação aqui" name="observacao" id="observacao" style="height: 100px" value="<?php echo $resultado[0]['observacao']?>"></textarea>
                        <label for="observacao">Observação</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" name="alterar">Cadastrar</button>
                </form>            
                <?php             
                    include_once('footer.php');
                ?>    
            </div>        
        </div>
    </body>
</html>