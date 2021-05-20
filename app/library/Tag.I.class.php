<?php
/**
 * Interface para as tags gerais.
 * @author Lucas Valente
 * @since 10/03/2020
 */
interface InterfaceTag {
    
    /**
     * Usado para setar style no elemento.
     * @param string $atributo
     * @param string $valor
     */
    public function setStyle($atributo, $valor);
    
}