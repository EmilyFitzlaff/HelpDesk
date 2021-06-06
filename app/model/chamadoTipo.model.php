<?php

    class Model_ChamadoTipo {
        /**
         * @property Required
         * @property Not Null
         * @property Auto Increment 
         */
        private $id;

        /**
         * @property Required
         * @property Not Null
         */
        private $descricao;

        /**
         * @property TEXT
         */
        private $observacao;

        /**
         * @property Required
         * @property Not Null
         */
        private $dataCadastro;
        
        /**
         * Getters e Setters
         */
        public function getId() {
            return $this->id;
        }
        
        public function setId($id) {
            $this->id = $id;
        }

        public function getDescricao() {
            return $this->descricao;
        }
        
        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getObservacao() {
            return $this->observacao;
        }
        
        public function setObservacao($observacao) {
            $this->observacao = $observacao;
        }

        public function getDataCadastro() {
            return $this->dataCadastro;
        }
        
        public function setDataCadastro($dataCadastro) {
            $this->dataCadastro = $dataCadastro;
        }
    }
?>