<div class="card-body" style="margin: 2em 5em;">
    <h2> Asignar Profesional </h2>
    <br>
    <form class="row g-3 needs-validation" novalidate>
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
                Favor de introducir apellidos
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">

                </div>
            </div>
        </div>



        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Favor de introducir dirección
            </div>
        </div>

    </form>
    <br>
    <br>
    <h2> Asignar Actividad </h2>
    <br>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="validationCustom04" class="form-label">Razón Social</label>
                <select class="form-select" id="validationCustom04" required>
                    <option>Minera & Asociados</option>
                    <option>Agroindustria</option>
                    <option>Metalurgia</option>
                </select>
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="mb-3">
                <label for="validationCustom04" class="form-label">Actividad a Realizar</label>
                <select class="form-select" id="validationCustom04" required>
                    <option>Capacitaciones</option>
                    <option>Mejoras</option>
                    <option>Asesoría</option>
                    <option>Checklist</option>
                </select>
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
    </form>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary" type="submit">Asignar</button>
        <button class="btn btn-primary" type="submit">Cancelar</button>
    </div>
</div>
