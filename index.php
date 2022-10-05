<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: src/');
} else {
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Ingrese usuario y contraseña
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        } else {
            require_once "conexion.php";
            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));
            $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$clave'");
            mysqli_close($conexion);
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $dato['idusuario'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['user'] = $dato['usuario'];
                header('Location: src/');
            } else {
                $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Contraseña incorrecta
                      
                    </div>';
                session_destroy();
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="login.css">
    <!-- <link rel="stylesheet" href="style2.css"> -->
</head>
<body>
    <main>
        <div class="row">
            <div class="colm-logo">
                <img src="assets/img/logoo.png" alt="Logo">
               
            </div>
            <div class="colm-form">
            <form action="" id="login-form" method="POST">
                <div class="form-container">
                    Ingrese su Nombre de Usuario:
                    <input type="text" class="input-field" name="usuario" id="usuario" placeholder="Usuario" autocomplete="off" required>
                    Ingrese su Contraseña:
                    <input type="password" class="input-field" name="clave" id="clave" placeholder="Contraseña" autocomplete="off" required>
                    <?php echo (isset($alert)) ? $alert : '' ; ?>
                    <input type="submit" value="Entrar" class="btn-login">
                  
                </div>
                </form>
            
            </div>
        </div>
    </main>

</body>
</html>