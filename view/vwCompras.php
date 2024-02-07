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
        </div>

        <div class="row gap-2 d-flex justify-content-center">
            <div class="col">
                <label class="form-label" for="precio">Precio:</label>
                <input class="form-control " type="number" id="precio" name="precio" />
                <span class="invalid-feedback" id="sprecio"></span>
            </div>
            <div class="col">
                <label class="form-label" for="proveedores">Proveedor:</label>
                <select class="form-select" name="proveedores" id="proveedores">

                </select>
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
                <button type="button" class="w-100 btn btn-primary d-none" id="btnModificarCompras" name="editar">Modificar</button>
            </div>
        </div>

    </div>
</form>

<table class="table rounded-3 fs-8">
    <thead>
        <tr>
            <!-- fecha, hora, descripcion y precio-->
            <th scope="col">#</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th>Editar</th>
            <th>Eliminar</th>

        </tr>
    </thead>
    <tbody id="tablaCompras">
        
    </tbody>
</table>
<span class="loader" id="loader"></span>
    <div class="flex gap-2" >
        <button id="btnAnterior" class="text-[1.5rem] flex items-center justify-center " > < </button>   
        <input id="pagina" type="number" value="1" class="w-[2rem] flex" >
        <button id="btnSiguiente" class="text-[1.5rem] flex items-center justify-center " > > </button>
    </div>

<script type="module" src="./src/js/Compras/co_index.js"></script>