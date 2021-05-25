<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<?php

    require_once('autoload.class.php');

    $aChamado        = new link("", "Chamados", "nav-link", "");
    $aUsuario        = new link("", "Usuários", "nav-link", "");
    $aChamadoTipo    = new link("", "Tipos de Chamados", "nav-link", "");
    $aModulo         = new link("", "Módulos", "nav-link", "");
    $aSituacao       = new link("", "Tipos de Situações", "nav-link", "");
    $aTipoPrivilegio = new link("", "Tipos de Privilégios", "nav-link", "");

    $liModulo = new Li("", "");
    $liModulo->addElement($aModulo);

    $liChamadoTipo = new Li("", "");
    $liChamadoTipo->addElement($aChamadoTipo);

    $liSituacao = new Li("", "");
    $liSituacao->addElement($aSituacao);

    $liTipoPrivilegio = new Li("", "");
    $liTipoPrivilegio->addElement($aTipoPrivilegio);
 
    $liChamado = new Li("nav-item");
    $liChamado->addElement($aChamado);
    
    $liUsuario = new Li("nav-item");
    $liUsuario->addElement($aUsuario);

    $ulMenu = new Ul("navbar-nav");
    $ulMenu->addElement($liChamado);
    $ulMenu->addElement($liUsuario);
    $ulMenu->addElement($liModulo);
    $ulMenu->addElement($liChamadoTipo);
    $ulMenu->addElement($liSituacao);
    $ulMenu->addElement($liTipoPrivilegio);

    $divCollapse = new Div("collapse navbar-collapse", "navbarNavDropdown");
    $divCollapse->addElement($ulMenu);

    $aTitle = new link("#", "HELPDESK", "navbar-brand", "");

    $divContainerFluid = new Div("container-fluid", "");
    $divContainerFluid->addElement($aTitle);
    $divContainerFluid->addElement($divCollapse);

    $navbar = new Nav("navbar navbar-expand-lg navbar-light bg-light", "");
    $navbar->addElement($divContainerFluid);

    echo $navbar;

?>