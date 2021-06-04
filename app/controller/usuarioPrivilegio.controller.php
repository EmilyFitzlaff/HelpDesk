<?php

    require('connection.controller.php');

    class Controller_UsuarioPrivilegio {

        private function SelectAll() {
            $conexao = new Conexao();            
            $SQL = "select * from usuarioprivilegio";            
            $dadosBD = $conexao->getSelect($SQL);
            
            $c = 0;

            $i = count($dadosBD);

            $aResultado = [];
            
            while($c < $i) {
                $oPrivilegio = new Model_UsuarioPrivilegio();
                $oPrivilegio->setId($dadosBD[$c][0]);
                $oPrivilegio->setDescricao($dadosBD[$c][1]);
                $aResultado[] = $oPrivilegio; 
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