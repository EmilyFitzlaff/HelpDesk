<?php

    require_once('connection.controller.php');

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
                $oResponsavel->setApelido($dadosBD[$c][5]);

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

        public function cadastrarModulo($nome, $sigla, $responsavel) {
            $SQL = ("INSERT INTO modulo (nome, sigla, responsavel) 
                     VALUES ('{$nome}', '{$sigla}', $responsavel)");
         
            $conexao = new Conexao();  
            $conexao->getSelect($SQL);
        }
    }
?>