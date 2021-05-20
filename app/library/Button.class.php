<?php
    class Button {
        private $sType;
        private $sClass;
        private $sId;
        private $aValue = array();
        private $sName;
        private $sValue;
        
        public function __construct($sClass, $sType, $sId, $sName='', $sValue='') {
            $this->sClass = $sClass;
            $this->sType = $sType;
            $this->sId = $sId;
            $this->sName = $sName;
            $this->sValue = $sValue;
        }

        public function __toString() {
            $txt = "<button";

            if (!empty($this->sType)) {
                $txt .= " type='{$this->sType}'";
            }

            if (!empty($this->sClass)) {
                $txt .= " class='{$this->sClass}'";
            }

            if (!empty($this->sId)) {
                $txt .= " id='{$this->sId}'";
            }

            if (!empty($this->sName)) {
                $txt .= " name='{$this->sName}'";
            }

            if (!empty($this->sValue)) {
                $txt .= " value='{$this->sValue}'";
            }

            $txt .= ">";

            foreach ($this->aValue as $value) {
                $txt .= $value. "\n";
            }

            return $txt .= '</button>';
        }

        function addElement($Element) {
            if (!empty($Element) || $Element == "0") {
                $this->aValue[] = $Element;
            }
        }
    }
?>