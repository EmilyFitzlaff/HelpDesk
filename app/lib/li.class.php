<?php

    class Lib_Li {

        private $sClass;
        private $aLista = array();
        
        public function __construct($sClass) {
            $this->sClass = $sClass;
        }

        public function addElement($sAtributo) {
            $this->aLista[] = $sAtributo;
        }

        public function __toString() {
            $sLi = '<li class="'.$this->sClass.'">' . "\n";
            foreach ($this->aLista as $sItemLista) {
                $sLi .= $sItemLista;
            }
            $sLi .= "</li>\n";
            return $sLi;
        }
    }

?>