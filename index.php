<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>No más accidentes</title>
    <link href="assents/css/login.css" rel="stylesheet" type="text/css" media="all" />
    <!-- icono -->
    <link rel="icon" href="assents/img/fondo.jpg" type="image/jpg" />
    <link rel="shortcut icon" href="assents/img/fondo.jpg" type="image/jpg" />

</head>

<body>
    <div class="container">
        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">

                        <h2>Ingresa tus credenciales</h2>
                        <hr>
                        <form action="validar.php" method="POST">

                        <label for="validationCustom05" class="form-label">Usuario *</label>
                        <input name="usuario" type="text" class="form-control" id="validationCustom05" required>

                        <label for="validationCustom05" class="form-label">Contraseña *</label>
                        <input name="contraseña" type="password" class="form-control" id="validationCustom05" required>

                            <br>
                            <input type="submit" value="Ingresar" class="button" name="ingresar">
                            <br>
                            <br>
                            <p>Sistema de Asesorias en Prevención</p>
                            <p>Administrativo</p>
                        
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    
?>
</body>

</html>