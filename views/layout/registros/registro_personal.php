<div class="card-body" style="margin: 2em 5em;">
    <h2> Datos del Personal </h2>
    <br>
    <form acction="index.php?controller=personal&action=save" method="POST" class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Rut</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                Favor de introducir un Rut Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
            <div class="invalid-feedback">
                Favor de introducir un Telefono Valido
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Nombre
            </label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
                Favor de introducir un Nombre
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom03" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Favor de introducir una diercción valida
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustomUsername" class="form-label">Dirección</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom03" class="form-label">Fecha de Nacimiento</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Favor de introducir una Fecha valida
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Estado Civil</label>
            <select class="form-select" id="validationCustom04" required>
                <option>Soltero(a)</option>
                <option>Casado(a)</option>
                <option>Viudo(a)</option>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Sexo</label>
            <select class="form-select" id="validationCustom04" required>
                <option>Masculino</option>
                <option>Femenino</option>
                <option>No Binario</option>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Tipo Usuario</label>
            <select class="form-select" id="validationCustom04" required>
                <option>Administrativo</option>
                <option>Profesional</option>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
    </form>
    <br>
    <br>
    <h2> Registrar Contraseña </h2>
    <br>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom02" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="validationCustom02" value="" required>
                <div class="invalid-feedback">

                </div>
            </div>

            <div class="mb-3">
                <label for="inputPassword3" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword3">
            </div>
        </div>

    </form>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" type="submit">Registrar</button>
        <button class="btn btn-warning col-2" type="submit">Cancelar</button>
    </div>
</div>


