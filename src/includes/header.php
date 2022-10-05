<?php
if (empty($_SESSION['active'])) {
    header('Location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BIENVENIDO</title>
    <link href="../assets/css/material-dashboard.css" rel="stylesheet" />
    <link href="../assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/js/jquery-ui/jquery-ui.min.css">
    <script src="../assets/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" style="background-color:#940c86">
            <div class="logo"><a href="./" style="color:white" class="simple-text logo-normal">
                   Farmacia San Telmo
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="usuarios.php">
                            <i  color="white" class="fas fa-user mr-2 fa-2x"></i>
                            <p style="color:white"> Usuarios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="config.php">
                            <i color="white"  class="fas fa-cogs mr-2 fa-2x"></i>
                            <p style="color:white"> Configuración</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="productos.php">
                            <i color="white"  class="fab fa-product-hunt mr-2 fa-2x"></i>
                            <p style="color:white"> Productos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="clientes.php">
                            <i  color="white" class=" fas fa-users mr-2 fa-2x"></i>
                            <p style="color:white"> Clientes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="ventas.php">
                            <i color="white" class="fas fa-cash-register mr-2 fa-2x"></i>
                            <p style="color:white"> Nueva Venta</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="lista_ventas.php">
                            <i color="white" class="fas fa-cart-plus mr-2 fa-2x"></i>
                            <p style="color:white"> Historial Ventas</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top bg-dark">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand"  href="javascript:;">BIENVENIDO</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">

                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                    <p class="d-lg-none d-md-block">
                                        Cuenta
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#nuevo_pass">Cambiar Contraseña</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="salir.php">Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">