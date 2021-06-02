<?php

    class Model_Modulo {
        private $id;
        private $descricao;
        private $sigla;
        private $dataCadastro;
        private $usuarioResponsavel;

        // getters e setters 
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

        public function getSigla() {
            return $this->sigla;
        }
        
        public function setSigla($sigla) {
            $this->sigla = $sigla;
        }

        public function getDataCadastro() {
            return $this->dataCadastro;
        }
        
        public function setDataCadastro($dataCadastro) {
            $this->dataCadastro = $dataCadastro;
        }

        public function getUsuario() {
            return $this->usuarioResponsavel;
        }
        
        public function setUsuarioResponsavel($usuarioResponsavel) {
            $this->usuarioResponsavel = $usuarioResponsavel;
        }
    }

?>