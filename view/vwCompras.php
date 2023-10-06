<?php require_once ("./components/superiorHtml.php")?>

<h2 class="text-center fs-11">Compras</h2>

<div class="d-flex justify-content-center">
    <button id="addCompras" class="btn  btn-apple text-white d-flex gap-1 flex-row justify-content-center">
        <img width="22" src="./src/assets/img/add-circle-svgrepo-com.svg" alt="">
        Registrar Compra
    </button>
</div>

<form method="post" action="" id="formCompras" class="col-8 p-2 h-auto align-items-center bg-white rounded-3 bg-opacity-25 shadow" style="display: none;">
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
                <label class="form-label" for="descripcion">Descripción de la compra:</label>
                <textarea class="form-control" id="descripcion" rows="5" cols="60" maxlength="79" name="descripcion" placeholder="Escriba aquí una breve descripción del producto o servicio que se ha adquirido."></textarea>
                <span class="invalid-feedback" id="sdescripcion"></span>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex flex-column justify-content-end">
                <button type="button" class="w-100 btn btn-primary" id="btnRegistrarCompras" name="incluir">Registrar</button>
            </div>
        </div>

    </div>
</form>

<table class="table rounded-3 fs-8">
    <thead>
        <tr>
            <!-- fecha, hora, descripcion y costo-->
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Costo</th>
            <th>Editar</th>
            <th>Eliminar</th>

        </tr>
    </thead>
    <tbody id="tablaCompras">
        <tr>
            <th scope="row">1</th>
            <td>12/08/23</td>
            <td>1:20</td>
            <td>3 acetaminofen</td>
            <td>1.8</td>
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

<script type="module" src="./src/js/Compras/co_index.js"></script>

<?php require_once ("./components/inferiorHtml.php")?>
