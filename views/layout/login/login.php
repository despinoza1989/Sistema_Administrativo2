<div class="contenedor_principal">
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
                        <form method="POST">
                        
                            <label for="validationCustom05" class="form-label">Usuario</label>
                            <input name="usuario" type="text" class="form-control" id="usuario" required>
                            <br>

                            <label for="validationCustom05" class="form-label">Contraseña</label>
                            <input name="password" type="password" class="form-control" id="password" required>

                            <br>
                            <div class="d-grid gap-2 ">
                                <input type="submit" value="Ingresar" class="btn btn-secondary "  name="ingresar">
                            </div>
                            <br>
                            <?php
                                if(isset($_POST['usuario'])&& isset($_POST['password'])){
                                    LoginController::validar($_POST['usuario'],$_POST['password']);
                                } 
                            ?>
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
</div>
