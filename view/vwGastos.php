<h2 class="text-center fs-11">Gastos</h2>

<div class="d-flex justify-content-center">
    <button id="addGastos" class="btn  btn-apple text-white d-flex gap-1 flex-row justify-content-center">
        <img width="22" src="./src/assets/img/add-circle-svgrepo-com.svg" alt="">
        Agregar Gasto
    </button>
</div>

<form method="post" action="" id="formGastos" class="col-8 p-2 h-auto align-items-center bg-white rounded-3 bg-opacity-25 shadow" style="display: none;">
    <div class=" d-flex flex-column gap-2">

        <div class="row gap-2 d-flex justify-content-center">

            <div class="col">
                <label class="form-label" for="fecha">Fecha:</label>
                <input class="form-control " type="date" id="fecha" name="fecha" />
                <span class="invalid-feedback" id="sfecha"></span>
            </div>

            <div class="col">
                <label class="form-label" for="hora">Hora:</label>
                <input class="form-control " type="time" id="hora" name="hora" />
                <span class="invalid-feedback" id="shora"></span>
            </div>

            <div class="col">
                <label class="form-label" for="costo">Costo:</label>
                <input class="form-control " type="number" id="costo" name="costo" />
                <span class="invalid-feedback" id="scosto"></span>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <label class="form-label" for="descripcion">Descripción del gasto:</label>
                <textarea class="form-control" id="descripcion" rows="5" cols="60" maxlength="79" name="descripcion" placeholder="Escriba aquí una breve descripción del tipo de gasto o servicio."></textarea>
                <span class="invalid-feedback" id="sdescripcion"></span>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex flex-column justify-content-end">
                <button type="button" class="w-100 btn btn-primary" id="btnRegistrarGastos" name="incluir">Registrar</button>
            </div>
        </div>

    </div>
</form>

<table class="table rounded-3 fs-8">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Cedula</th>
            <th scope="col">Telefono</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody id="tablaGastos">
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

<script type="module" src="./src/js/Gastos/ga_index.js"></script>