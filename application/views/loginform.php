<?php
    switch($msg){
        case '1':
            $mensaje="Error de ingreso";
            break;
        case '2':
            $mensaje="Acceso no valido";
            break;
        case '3':
            $mensaje="Gracias por usar el sistema";
            break;
        case 'default':
            $mensaje="ingrese sus datos";
            break;
    }
?>

<p><?php echo $mensaje; ?></p>

<?php
    echo form_open_multipart('usuario/validarusuario');
?>

<div>
    <!--<input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Ingresar</button>-->
</div>

<?php
    echo form_close();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    </head>

    <body class="">
    
    <main class="main-content  mt-0">
        <section>
        <div class="page-header min-vh-100">
            <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                <?php
                    echo form_open_multipart('usuario/validarusuario');
                ?>    
                <div class="card card-plain">
                    <div class="card-header pb-0 text-start">
                    <h4 class="font-weight-bolder">Iniciar Sesión</h4>
                    <p class="mb-0">Ingresa tu usuario y contraseña para iniciar sesión.</p>
                    </div>
                    <div class="card-body">
                    <form role="form">
                        <div class="mb-3">
                        <input type="text" name="login" class="form-control form-control-lg" placeholder="login" aria-label="Email">
                        </div>
                        <div class="mb-3">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                        </div>
                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <div class="text-center">
                       
                        <button type="submit" class="btn btn-lg btn-success btn-lg w-100 mt-4 mb-0">Ingresar</button>
                        </div>
                    </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-sm mx-auto">
                        Don't have an account?
                        <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a>
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://5.imimg.com/data5/DJ/TU/MY-16141316/10-hp-solar-water-irrigation-pump-500x500.jpg');
            background-size: cover;">
                    <span class="mask bg-gradient-success opacity-6"></span>
                    <h4 class="mt-5 text-white font-weight-bolder position-relative">"La solución ecológica y económica para tus cultivos"</h4>
                    <p class="text-white position-relative">El riego que se adapta a tus necesidades y al medio ambiente.</p>
                </div>
                </div>
                <?php
                    echo form_close();
                ?>
            </div>
            </div>
        </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
    </body>

</html>