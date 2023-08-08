<h2 class="text-center fs-11">Empleados</h2>

<div class="d-flex justify-content-center">
    <button id="addEmpleados" class="btn  btn-apple text-white d-flex gap-1 flex-row justify-content-center">
        <img width="22" src="./src/assets/img/add-circle-svgrepo-com.svg" alt="">
        Registrar Empleado
    </button>
</div>

<form method="post" action="" id="formEmpleados" class="col-8 p-2 h-auto align-items-center bg-white rounded-3 bg-opacity-25 shadow" style="display: none;">
    <div class=" d-flex flex-column gap-2">
        <!-- cargo, nombre y contraseña -->
        <div class="row">
            <div class="col">
                <label class="form-label" for="nombre">Nombre:</label>
                <input class="form-control " type="text" id="nombre" name="nombre" />
                <span class=" invalid-feedback" id="snombre"></span>
            </div>

            <div class="col">
                <label class="form-label" for="cargo">Cargo:</label>
                <select class="form-select" name="cargo" id="cargo">
                    <option value=""></option>
                    <option value="gerente">Empleado</option>
                    <option value="gerente">Gerente</option>
                </select>
                <span class="invalid-feedback" id="scargo"></span>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class=" form-label" for="contraseña">Contraseña:</label>
                <input class="form-control " type="password" id="contraseña" name="contraseña" />
                <span class="invalid-feedback" id="scontraseña"></span>
            </div>

            <div class="col">
                <label class=" form-label" for="rcontraseña">Repita la contraseña:</label>
                <input class="form-control " type="password" id="rcontraseña" name="rcontraseña" />
                <span class="invalid-feedback" id="srcontraseña"></span>
            </div>

        </div>
        
        <div class="row">
            <div class="col d-flex flex-column justify-content-end">
                <button type="button" class="w-100 btn btn-primary" id="btnRegistrarEmpleados" name="incluir">Registrar</button>
            </div>
        </div>
    </div>
</form>

<table class="table rounded-3 fs-8">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">cargo</th>
            <th scope="col">contraseña</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody id="tablaEmpleados">
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>3333333333</td>
            <td>
                <button class="btn-sm btn btn-warning ">
                    <img src="./src/assets/img/edit-svgrepo-com.svg" alt="" width="15">
                </button>
            </td>
            <td>
                <button class="btn-sm btn btn-danger ">
                    <img src="./src/assets/img/delete-svgrepo-com.svg" alt="" width="15">
                </button>
            </td>
        </tr>
    </tbody>
</table>

<script type="module" src="./src/js/Empleados/em_index.js"></script>