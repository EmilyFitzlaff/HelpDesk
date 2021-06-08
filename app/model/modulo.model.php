<?php

    class Model_Modulo {
        private $id;
        private $descricao;
        private $sigla;

        /**
         * @var Model_Usuario usuario.model.php
         */
        private $UsuarioResponsavel;

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

        public function getUsuarioResponsavel() {
            return $this->UsuarioResponsavel;
        }
        
        public function setUsuarioResponsavel(Model_Usuario $UsuarioResponsavel) {
            $this->UsuarioResponsavel = $UsuarioResponsavel;
        }
    }

?>