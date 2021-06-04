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
                $oChamadoTipo->setDataCadastro($dadosBD[$c][3]);
                $aResultado[] = $oChamadoTipo; 
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