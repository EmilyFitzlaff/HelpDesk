<?php

    class Model_ChamadoTramite {
        /**
         * @property Required
         * @property Not Null
         * @property Auto Increment
         */
        private $id;
        
        /**
         * @var Model_Chamado chamado.model.php
         * @property Required
         * @property Not Null
         */
        private $Chamado;

        /**
         * @property Required
         * @property Not Null
         */
        private $descricao;
        
        /**
         * @var Model_Usuario usuario.model.php
         */
        private $Usuario;

        private $dataHoraTramite;

         /**
         * @var Model_Usuario usuario.model.php
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

        public function setChamado(Model_Chamado $Chamado) {
            $this->Chamado = $Chamado;
        }

        public function getUsuario() {
            return $this->Usuario;
        }

        public function setUsuario(Model_Usuario $Usuario) {
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

        public function setDestinatario(Model_Usuario $Destinatario) {
            $this->Destinatario = $Destinatario;
        }

    }

?>