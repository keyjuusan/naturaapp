<h2 class="text-center fs-11">Ventas</h2>

<div class="d-flex justify-content-center">
    <button id="addVentas" class="btn  btn-apple text-white d-flex gap-1 flex-row justify-content-center">
        <img width="22" src="./src/assets/img/add-circle-svgrepo-com.svg" alt="">
        Registrar Venta
    </button>
</div>

<form method="post" action="" id="formVentas" class="col-8 p-2 h-auto align-items-center bg-white rounded-3 bg-opacity-25 shadow" style="display: none;">
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

        </div>

        <div class="row">
            <div class="col">
                <label class="form-label" for="costo">Costo:</label>
                <input class="form-control " type="text" id="costo" name="costo" />
                <span class="invalid-feedback" id="scosto"></span>
            </div>
            
            <div class="col">
                <label class="form-label" for="clientes">Cliente:</label>
                <select class="form-select" name="clientes" id="clientes">
                    <option value="">--</option>
                </select>
                <!-- <span class="invalid-feedback" id="scliente"></span> -->
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class="form-label" for="descripcion">Descripción de la compra:</label>
                <textarea class="form-control" style="resize: none;" id="descripcion" rows="5" cols="60" maxlength="79" name="descripcion" placeholder="Escriba aquí una breve descripción de los productos vendidos."></textarea>
                <span class="invalid-feedback" id="sdescripcion"></span>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex flex-column justify-content-end">
                <button type="submit" class="w-100 btn btn-primary" id="btnRegistrarVentas" name="incluir">Registrar</button>
            </div>
            <div class="col d-flex flex-column justify-content-end">
                <button type="submit" class="w-100 d-none btn btn-primary" id="btnModificarVentas" name="editar">Modificar</button>
            </div>
        </div>

    </div>
</form>

<table class="table rounded-3 fs-8">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="">descripcion</th>
            <th scope="">precio</th>
            <th scope="">fecha</th>
            <th scope="">hora</th>
            <th scope="">id_producto</th>
            <th scope="">id_empleado</th>
            <th scope="">id_cliente</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody id="tablaVentas">
        </tbody>
    </table>
    <span class="loader" id="loader"></span>
    <div class="flex gap-2" >
        <button id="btnAnterior" class="text-[1.5rem] flex items-center justify-center " > < </button>   
        <input id="pagina" type="number" value="1" class="w-[2rem] flex" >
        <button id="btnSiguiente" class="text-[1.5rem] flex items-center justify-center " > > </button>
    </div>

<script type="module" src="./src/js/Ventas/ve_index.js"></script>
