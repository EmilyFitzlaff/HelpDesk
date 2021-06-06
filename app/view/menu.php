<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.view.php">
            <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Helpdesk
        </a>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">      
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cadastros</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="chamadoTipo-cadastro.view.php">Tipos Chamados</a></li>
                        <li><a class="dropdown-item" href="modulo-cadastro.view.php">Módulos</a></li>
                        <li><a class="dropdown-item" href="usuario-cadastro.view.php">Usuários</a></li>
                    </ul>
                </li>   

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="chamado.view.php">Chamados</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consultas</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="chamadoTipo.view.php">Tipos Chamados</a></li>
                        <li><a class="dropdown-item" href="modulo.view.php">Módulos</a></li>
                        <li><a class="dropdown-item" href="situacao.view.php">Situações</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="usuarioPrivilegio.view.php">Privilégios</a></li>
                        <li><a class="dropdown-item" href="usuario.view.php">Usuários</a></li>
                    </ul>
                </li>                
            </ul>
        </div>
    </div>
</nav>