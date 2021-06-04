<?php

    require('connection.controller.php');

    class Controller_Situacao {
        private function SelectAll() {
            $conexao = new Conexao();            
            $SQL = "select * from situacao";            
            $dadosBD = $conexao->getSelect($SQL);
            
            $c = 0;

            $i = count($dadosBD);

            $aResultado = [];
            
            while($c < $i) {
                $oSituacao = new Model_Situacao();
                $oSituacao->setId($dadosBD[$c][0]);
                $oSituacao->setDescricao($dadosBD[$c][1]);
                $oSituacao->setEhChamado($dadosBD[$c][2]);
                $oSituacao->setEhChamadoTipo($dadosBD[$c][3]);
                $oSituacao->setEhModulo($dadosBD[$c][4]);
                $oSituacao->setEhUsuario($dadosBD[$c][5]);
                $oSituacao->setEhUsuarioPrivilegio($dadosBD[$c][6]);
                $aResultado[] = $oSituacao; 
                $c++;
            } 
            return $aResultado;                
        }

        public function returnSelectAll() {
            $aDados = $this->SelectAll();
            return $aDados;
        }
    }
?>