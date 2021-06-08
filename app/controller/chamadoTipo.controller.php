<?php

    require('connection.controller.php');

    class Controller_ChamadoTipo {

        private function SelectAll() {            
            $conexao = new Conexao();            
            $SQL = "select * from chamadotipo";            
            $dadosBD = $conexao->getSelect($SQL);
            
            $c = 0;

            $i = count($dadosBD);

            $aResultado = [];
            
            while($c < $i) {
                $oChamadoTipo = new Model_ChamadoTipo();
                $oChamadoTipo->setId($dadosBD[$c][0]);
                $oChamadoTipo->setDescricao($dadosBD[$c][1]);
                $oChamadoTipo->setObservacao($dadosBD[$c][2]);
                $aResultado[] = $oChamadoTipo; 
                $c++;
            } 
            return $aResultado;                
        }

        public function returnSelectAll() {
            $aDados = $this->SelectAll();
            return $aDados;
        }

        public function cadastrarChamadoTipo($descricao, $observacao) {
            $SQL = ("INSERT INTO chamadotipo (descricao, observacao) 
                     VALUES ('{$descricao}', '{$observacao}')");
         
            $conexao = new Conexao();  
            $conexao->getSelect($SQL);
        }

        public function deletarTipoChamado($codigo) {
            if(isset($_POST['excluir'])) {
                try {
                    $SQL = ("DELETE FROM chamadotipo WHERE id = {$codigo}");

                    $conexao = new Conexao();  
                    $conexao->getSelect($SQL);
        
                    if (!$conexao->getSelect($SQL)){
                        throw new PDOException();
                    }
        
                   ?><br>
                    <div class="alert alert-success" role="alert">
                        <span>Registro excluído com sucesso!</span>
                    </div>
                    <?php
                    exit;
                   
                } catch(PDOException $erro) {
                    ?>
                    <br>
                    <div class="alert alert-danger" role="alert">
                        <span>Este registro não pode ser excluído pois está vinculado à outro e isso violará uma regra de integradade definida no banco de dados!</span>
                    </div>
                    <?php                    
                }
            }
        }
    }
?>