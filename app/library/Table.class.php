<?php
    class Table {
        protected $class;
        public $thead;
        public $tbody;

        function __construct($class)
        {
            $this->class = $class;
            $this->thead = new THead;
            $this->tbody = new TBody;
        }

        function __toString()
        {
            $FullText = "<table";

            if (!empty($this->class)) {
                $FullText .= " class='$this->class'";
            }

            $FullText .= ">\n";

            $FullText = $FullText . $this->thead->toString();
            $FullText = $FullText . $this->tbody->toString();
            $FullText = $FullText . "</table>";

            return $FullText;
        }
    }

    class THead {
        protected $Tr = array();

        function addTr($Tr) {
            if (!(empty($Tr))) {
                $this->Tr[] = $Tr;
            }
        }

        function __toString() {
            $FullText = "<thead class='thead-dark'>";

            foreach ($this->Tr as $Tr) {
                $FullText = $FullText . $Tr->toString();
            }

            $FullText = $FullText . "</thead>\n";

            return $FullText;
        }

        function toString() {
            $FullText = "<thead>";

            foreach ($this->Tr as $Tr) {
                $FullText = $FullText . $Tr->toString();
            }

            $FullText = $FullText . "</thead>\n";

            return $FullText;
        }
    }

    class TBody {
        protected $Tr = array();

        function addElement($Element = array()) {
            if (!(empty($Element))) {
                foreach ($Element as $Elem) {
                    $this->Tr[] = $Elem;
                }
            }
        }

        function __toString() {
            return $this->toString();
        }

        function toString() {
            $FullText = "<tbody>";

            foreach ($this->Tr as $row) {
                $FullText .= $row;
            }

            $FullText = $FullText . "</tbody>\n";

            return $FullText;
        }
    }

    class Tr {
        protected $Elem = array();

        function addElement($Element = array()) {
            if (!(empty($Element))) {
                foreach ($Element as $Elem) {
                    $this->Elem[] = $Elem;
                }
            }
        }

        function __toString() {
            return $this->toString();
        }

        function toString() {
            $FullText = "<tr";

            $FullText .= '>';

            foreach ($this->Elem as $value) {
                $FullText = $FullText . $value->toString();
            }

            $FullText = $FullText . "</tr>\n";

            return $FullText;
        }
    }

    class Th {
        protected $scope;
        protected $valor = array();
        protected $style;
        protected $colspan;

        function __construct($scope='', $colspan='', $style='')
        {
            $this->scope = $scope;
            $this->style = $style;
            $this->colspan = $colspan;
        }

        function __toString() {
            return $this->toString();
        }

        function addElement($Elem) {
            if (!empty($Elem)) {
                $this->valor[] = $Elem;
            }
        }

        function toString() {
            $FullText = "<th";

            if (!empty($this->scope)) {
                $FullText .= " scope='{$this->scope}'";
            }

            if (!empty($this->colspan)) {
                $FullText .= " colspan='{$this->colspan}'";
            }

            if (!empty($this->style)) {
                $FullText .= " style='{$this->style}'";
            }

            $FullText .= ">";
            
            foreach ($this->valor as $data) {
                $FullText .= $data . "\n";
            }

            $FullText .= "</th>\n";

            return $FullText;
        }
    }

    class Td {
        protected $valor = array();
        protected $colspan;

        function __construct($colspan = '') {
            if (!empty($colspan)) {
                $this->colspan = $colspan;
            }
        }

        function addElement($Element) {
            if (!empty($Element)) {
                $this->valor[] = $Element;
            }
        }

        function __toString() {
            return $this->toString();
        }

        function toString() {
            $text = "<td";
            
            if (!empty($this->colspan)) {
                $text .= " colspan='{$this->colspan}'"; 
            }

            $text .= '>';
            
            foreach ($this->valor as $valor) {
                $text .= $valor. "\n";
            }
            
            $text .= "</td>\n";

            return $text;
        }
    }
?>