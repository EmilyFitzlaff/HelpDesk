<?php

    require('../autoload.php');
    require('connection.controller.php');

    class Controller_ChamadoTipo {
        public function SelectAll() {
            $conexao = new Conexao();
            
            $SQL = "select * from chamadotipo";
            
            $dadosBD = $conexao->getSelect($SQL);
            echo "<pre>";
           
            var_dump($dadosBD);
            
            echo "</pre>";

            while($dadosBD) {
                $oChamadoTipo = new Model_ChamadoTipo();
                $oChamadoTipo->setId('id');
                $oChamadoTipo->setDescricao($dadosBD['descricao']);
                $oChamadoTipo->setObservacao($dadosBD['observacao']);
                $oChamadoTipo->setDataCadastro($dadosBD['dataCadastro']);
                $aResultado[] = $oChamadoTipo; 
            }
            return $aResultado;             
        }
    }

    $conexao = new Controller_ChamadoTipo();
    $conexao->SelectAll();
?>