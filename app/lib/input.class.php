<?php

    class Input {
        private $sType;
        private $sClass;
        private $sId;
        private $sPlaceholder;
        private $disabled;
        private $sValue;
        
        public function __construct($sType, $sClass, $sId, $sPlaceholder, $disabled="false", $sValue ="") {
            $this->sType = $sType;
            $this->sClass = $sClass;
            $this->sId = $sId;
            $this->sPlaceholder = $sPlaceholder;
            $this->disabled = $disabled;
            $this->sValue = $sValue;
        }

        public function __toString() {
            $txt = "<input";
            
            if (!empty($this->sType)) {
                $txt .= " type='{$this->sType}'";
            }

            if (!empty($this->sClass)) {
                $txt .= " class='{$this->sClass}'";
            }

            if (!empty($this->sId)) {
                $txt .= " id='{$this->sId}'";
            }

            if (!empty($this->sPlaceholder)) {
                $txt .= " placeholder='{$this->sPlaceholder}'";
            }

            if (!empty($this->disabled)) {
                $txt .= " disabled='{$this->disabled}'";
            }

            if (isset($this->sValue)) {
                $txt .= " value='{$this->sValue}'";
            }

            $txt .= ">";

            return $txt;
        }
    }
    
?>