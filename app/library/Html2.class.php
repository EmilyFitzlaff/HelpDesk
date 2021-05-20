<?php
class Html2 {
    
    /**
     * @var string
     */
    private $html;
    
    function getHtml() {
        return $this->html;
    }

    function setHtml($html) {
        $this->html = $html;
    }
    
    public function __construct() {
        $this->setHtml($this->iniciaHtml());
    }
    
    /**
     * {@inheritdoc}
     */
    public function iniciaHtml() {
        return "<html>
                    <head>
                        %title
                        %meta
                    </head>
                    <body>
                    </body>
                </html>";
    }   
    
}
