<?php

    require('connection.controller.php');

    class Controller_Usuario {
        private function SelectAll() {
            $conexao = new Conexao();            
            $SQL = "select * from usuario join usuarioprivilegio on usuario.id = usuarioprivilegio.id";            
            $dadosBD = $conexao->getSelect($SQL);
            
            $c = 0;

            $i = count($dadosBD);

            $aResultado = [];
            
            while($c < $i) {
                $oUsuario = new Model_Usuario();
                $oUsuario->setId($dadosBD[$c][0]);
                $oUsuario->setApelido($dadosBD[$c][1]);
                $oUsuario->setEmail($dadosBD[$c][2]);
                $oUsuario->setDataCadastro($dadosBD[$c][4]);

                $oPrivilegio = new Model_UsuarioPrivilegio();
                $oPrivilegio->setId($dadosBD[$c][5]);

                $oUsuario->setPrivilegio($oPrivilegio);

                $aResultado[] = $oUsuario; 
                $c++;
            } 
            return $aResultado;                
        }

        public function returnSelectAll() {
            $aDados = $this->SelectAll();
            return $aDados;
        }

        public function MontaSelectUsuario() {
            $aDados = $this->returnSelectAll();
            var_dump($aDados);
        }
    }
?>