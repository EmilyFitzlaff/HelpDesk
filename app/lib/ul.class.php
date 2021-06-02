<?php

    class Lib_Ul {
        
        private $aLista = array();
        private $sClass;

        public function __construct($sClass) {
            $this->sClass = $sClass;
        }

        public function addElement($sAtributo) {
            $this->aLista[] = $sAtributo;
        }

        public function __toString() {
            $sUl = '<ul class="'.$this->sClass.'">' . "\n";
            foreach ($this->aLista as $sItemLista) {
                $sUl .= $sItemLista;
            }
            $sUl .= "</ul>\n";
            return $sUl;
        }
    }

?>
