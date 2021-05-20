<?php

    class UsuarioPrivilegio {
        private $id;
        private $descricao;

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
    }
?>