<?php

    class Lib_Link {

        private $href;
        private $text;
        private $target;
        private $class;

        public function __construct($href, $text, $class, $target) {
            $this->href = $href;
            $this->text = $text;
            $this->class = $class;
            $this->target = $target;
        }

        public function __toString() {
            $link = "<a href='{$this->href}'";

            if (isset($this->class) && !empty($this->class)) {
                $link .= " class='{$this->class}'";
            }

            if (isset($this->target) && !empty($this->target)) {
                $link .= " target='{$this->target}'";
            }

            $link .= ">{$this->text}</a>\n";
            return $link;
        }
    }

?>