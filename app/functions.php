<?php

    function setVazio() {
        return "<div class='alert alert-secondary'><span>Não há dados para exibição!</span></div>";
    }

    function trueOrFalse($parametro) {
        if($parametro == 1) {
            return "Sim";
        } else {
            return "Não";
        }
    }
?>