<?php
    class Model_Chamado {
        protected $id;
        protected $abertura;
        /**
         * @var Model_Usuario usuario.model.php
         */        
        protected $usuario;
        protected $descricao;
        protected $encerramento;
        protected $observacao;
        /**
         * @var Model_Usuario usuario.model.php
         */        
        protected $responsavel;
        /**
         * @var Model_Modulo modulo.model.php
         */        
        protected $modulo;
        
        //getters and setters
        public function getId() {
            return $this->id;
        }
        
        public function setId($id) {
            $this->id = $id;
        }

        public function getAbertura() {
            return $this->abertura;
        }
        
        public function setAbertura($abertura) {
            $this->abertura = $abertura;
        }

        public function getUsuario() {
            return $this->usuario;
        }
        
        public function setUsuario(Model_Usuario $usuario) {
            $this->usuario = $usuario;
        }

        public function getDescricao() {
            return $this->descricao;
        }
        
        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getEncerramento() {
            return $this->encerramento;
        }
        
        public function setEncerramento($encerramento) {
            $this->encerramento = $encerramento;
        }

        public function getObservacao() {
            return $this->observacao;
        }
        
        public function setObservacao($observacao) {
            $this->observacao = $observacao;
        }

        public function getResponsavel() {
            return $this->responsavel;
        }
        
        public function setResponsavel(Model_Usuario $responsavel) {
            $this->responsavel = $responsavel;
        }

        public function getModulo() {
            return $this->modulo;
        }
        
        public function setModulo(Model_Modulo $modulo) {
            $this->modulo = $modulo;
        }
    }
?>