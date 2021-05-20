<?php

    class Usuario {
        private $id;
        private $apelido;
        private $email;
        private $senha;
        private $dataCadastro;

        /**
         * @var UsuarioPrivilegio usuarioPrivilegio.model.php
         */
        private $Privilegio;

        // getters e setters 
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getApelido() {
            return $this->apelido;
        }

        public function setApelido($apelido) {
            $this->apelido = $apelido;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function getDataCadastro() {
            return $this->dataCadastro;
        }

        public function setDataCadastro($dataCadastro) {
            $this->dataCadastro = $dataCadastro;
        }

        public function getPrivilegio() {
            return $this->Privilegio;
        }

        public function setPrivilegio(UsuarioPrivilegio $Privilegio) {
            $this->Privilegio = $Privilegio;
        }

    }

?>