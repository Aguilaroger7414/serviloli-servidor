<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Prestaexpress</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header></header>
    <main>
        <div class="container pb-5">
            <!-- login -->
            <div class="container">
                <div class="row justify-content-center align-items-center" style="height:100vh">
                    <div class="col-md-4">
                        <?php if (session('error')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo session('error'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-body">
                                <div>

                                </div>

                                <!-- la imagen de servilolihksbfkjgj
                            dfibsdhfbgdsjkbfkjdsbkfhbusdbfkhbdskhfbkhbf
                        sdopfjojusdhfkhbsdfjbkjbd
                    ljdbkj khd kvhbkjbhbjhdbhkbd -->

                                <img src="https://i.imgur.com/KnYkoJl.png" width="200" height="130">





                                <h5>Iniciar sesión</h5>

                                <hr>
                                <form action="<?php echo base_url('/auth/login'); ?>" autocomplete="off" method="post">
                                    <div class="form-group">
                                        <h5>Dirección de email o usuario</h5>
                                        <input type="text" class="form-control bg-light text-dark" name="usuario" placeholder="Ej,pablo">
                                    </div>

                                    <h5>Contraseña</h5>
                                    <div class="form-group">
                                        <input type="password" class="form-control bg-light text-dark" name="contrasena" placeholder="">
                                    </div>

                                    <center>
                                        <button type="submit" class="btn btn-primary" style="background-color: Turquoise;">Entrar</button>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /login -->
        </div>
    </main>
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>