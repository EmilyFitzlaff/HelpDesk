<?php

    require('connection.controller.php');

    class Controller_Modulo {

        private function SelectAll() {
            $conexao = new Conexao();            
            $SQL = "select * from modulo join usuario on modulo.responsavel = usuario.id";            
            $dadosBD = $conexao->getSelect($SQL);
            
            $c = 0;

            $i = count($dadosBD);

            $aResultado = [];
            
            while($c < $i) {
                $oModulo = new Model_Modulo();
                $oModulo->setId($dadosBD[$c][0]);
                $oModulo->setDescricao($dadosBD[$c][1]);
                $oModulo->setSigla($dadosBD[$c][2]);
                
                $oResponsavel = new Model_Usuario();
                $oResponsavel->setId($dadosBD[$c][3]);

                $oModulo->setUsuarioResponsavel($oResponsavel);

                $aResultado[] = $oModulo; 
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