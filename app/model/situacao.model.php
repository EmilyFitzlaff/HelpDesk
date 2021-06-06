<?php

    class Model_Situacao {
        /**
         * ID da Situação, campo Obrigatório, AI e Not Null
         */
        protected $id;
        protected $descricao;
        protected $ehChamado;
        protected $ehChamadoTipo;
        protected $ehModulo;
        protected $ehUsuario;
        protected $ehUsuarioPrivilegio;

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

        public function getEhChamado() {
            return $this->ehChamado;
        }

        public function setEhChamado($ehChamado) {
            $this->ehChamado = $ehChamado;
        }

        public function getEhChamadoTipo() {
            return $this->ehChamadoTipo;
        }

        public function setEhChamadoTipo($ehChamadoTipo) {
            $this->ehChamadoTipo = $ehChamadoTipo;
        }

        public function getEhModulo() {
            return $this->ehModulo;
        }

        public function setEhModulo($ehModulo) {
            $this->ehModulo = $ehModulo;
        }

        public function getEhUsuario() {
            return $this->ehUsuario;
        }

        public function setEhUsuario($ehUsuario) {
            $this->ehUsuario = $ehUsuario;
        }

        public function getEhUsuarioPrivilegio() {
            return $this->ehUsuarioPrivilegio;
        }

        public function setEhUsuarioPrivilegio($ehUsuarioPrivilegio) {
            $this->ehUsuarioPrivilegio = $ehUsuarioPrivilegio;
        }   
    }
    
?>