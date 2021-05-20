<?php

    class ChamadoTramite {
        private $id;
        
        /**
         * @var Chamado chamado.model.php
         */

        private $Chamado;
        private $descricao;
        
        /**
         * @var Usuario usuario.model.php
         */
        private $Usuario;

        private $dataHoraTramite;

         /**
         * @var Usuario usuario.model.php
         */
        private $Destinatario;

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

        public function getChamado() {
            return $this->Chamado;
        }

        public function setChamado(Chamado $Chamado) {
            $this->Chamado = $Chamado;
        }

        public function getUsuario() {
            return $this->Usuario;
        }

        public function setUsuario(Usuario $Usuario) {
            $this->Usuario = $Usuario;
        }

        public function getDataHoraTramite() {
            return $this->dataHoraTramite;
        }

        public function setDataHoraTramite($dataHoraTramite) {
            $this->dataHoraTramite = $dataHoraTramite;
        }

        public function getDestinatario() {
            return $this->Destinatario;
        }

        public function setDestinatario(Usuario $Destinatario) {
            $this->Destinatario = $Destinatario;
        }

    }

?>