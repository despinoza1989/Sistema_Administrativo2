<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
    <title>No más accidentes</title>    
    <!-- icono -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link href="assents/css/login.css" rel="stylesheet" />


</head>

<body>

    
    <div class="container">
        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-12 col-md-4 offset-md-4">
                <div class="card ">
                    <div class="card-body ">

                        <h2>Ingresa tus credenciales</h2>
                        <hr>
                        <form action="validar.php" method="POST">
                        
                            <label for="validationCustom05" class="form-label">Usuario</label>
                            <input name="usuario" type="text" class="form-control" id="validationCustom05" required>
                            <br>

                            <label for="validationCustom05" class="form-label">Contraseña</label>
                            <input name="contraseña" type="password" class="form-control" id="validationCustom05" required>

                            <br>
                            <div class="d-grid gap-2 ">
                                <input type="submit" value="Ingresar" class="btn btn-secondary " name="ingresar">
                            </div>
                            <br>
                            <br>
                            <p>Sistema de Asesorias en Prevención</p>
                            <p>Administrativo</p>
                            <div>
                            <div class="logo">
                                <img src="assents/img/Logo Empresa 2.png" alt="logo">
                            </div>
                            </div>

                        </form>     
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>