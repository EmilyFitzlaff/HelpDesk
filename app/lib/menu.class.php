<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<?php

    require_once('autoload.class.php');

    $aChamado        = new Lib_Link("", "Chamados", "nav-link", "");
    $aUsuario        = new Lib_Link("", "Usuários", "nav-link", "");
    $aChamadoTipo    = new Lib_Link("", "Tipos de Chamados", "nav-link", "");
    $aModulo         = new Lib_Link("", "Módulos", "nav-link", "");
    $aSituacao       = new Lib_Link("", "Tipos de Situações", "nav-link", "");
    $aTipoPrivilegio = new Lib_Link("", "Tipos de Privilégios", "nav-link", "");

    $liModulo = new Lib_Li("", "");
    $liModulo->addElement($aModulo);

    $liChamadoTipo = new Lib_Li("", "");
    $liChamadoTipo->addElement($aChamadoTipo);

    $liSituacao = new Lib_Li("", "");
    $liSituacao->addElement($aSituacao);

    $liTipoPrivilegio = new Lib_Li("", "");
    $liTipoPrivilegio->addElement($aTipoPrivilegio);
 
    $liChamado = new Lib_Li("nav-item");
    $liChamado->addElement($aChamado);
    
    $liUsuario = new Lib_Li("nav-item");
    $liUsuario->addElement($aUsuario);

    $ulMenu = new Lib_Ul("navbar-nav");
    $ulMenu->addElement($liChamado);
    $ulMenu->addElement($liUsuario);
    $ulMenu->addElement($liModulo);
    $ulMenu->addElement($liChamadoTipo);
    $ulMenu->addElement($liSituacao);
    $ulMenu->addElement($liTipoPrivilegio);

    $divCollapse = new Lib_Div("collapse navbar-collapse", "navbarNavDropdown");
    $divCollapse->addElement($ulMenu);

    $aTitle = new Lib_Link("#", "HELPDESK", "navbar-brand", "");

    $divContainerFluid = new Lib_Div("container-fluid", "");
    $divContainerFluid->addElement($aTitle);
    $divContainerFluid->addElement($divCollapse);

    $navbar = new Lib_Nav("navbar navbar-expand-lg navbar-light bg-light", "");
    $navbar->addElement($divContainerFluid);

    echo $navbar;

?>