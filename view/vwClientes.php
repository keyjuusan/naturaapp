<h2 class="text-center fs-11">Clientes</h2>

<div class="d-flex justify-content-center">
    <button id="addClientes" class="btn  btn-apple text-white d-flex gap-1 flex-row justify-content-center">
        <img width="22" src="./src/assets/img/add-circle-svgrepo-com.svg" alt="">
        Registrar Cliente
    </button>
</div>

<form id="formClientes" class="col-8 p-2 h-auto align-items-center bg-white rounded-3 bg-opacity-25 shadow" style="display: none;">
    <div id="modal" class=" d-flex flex-column gap-2 container">
        <!-- cedula, nombre y telefono -->
        <div class="d-flex flex-column gap-2">
            <div class="row">
                <label class="form-label" for="nombre">Nombre:</label>
                <input class="form-control " type="text" autocomplete="off" id="nombre" name="nombre" />
                <span class=" invalid-feedback" id="snombre"></span>
            </div>
        
            <div class="row">
                <label class="form-label" for="cedula">Cedula:</label>
                <input class="form-control " type="number" autocomplete="off" id="cedula" name="cedula" />
                <span class="invalid-feedback" id="scedula"></span>
            </div>
            <div class="row">
                <label class=" form-label" for="telefono">Teléfono:</label>
                <input class="form-control " type="number" autocomplete="off" id="telefono" name="telefono" />
                <span class="invalid-feedback" id="stelefono"></span>
            </div>

            <div class="row d-flex flex-column justify-content-end">
                <button type="submit" class="w-100 btn btn-primary " id="btnRegistrarClientes" name="incluir" style="top:32px;">Registrar</button>
            </div>

            <div class="row d-flex flex-column justify-content-end">
                <button type="submit" class="w-100 d-none btn btn-primary " id="btnModificarClientes" name="incluir" style="top:32px;">Editar</button>
            </div>
        </div>
    </div>
</form>

<table  class="table rounded-3 fs-8">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cedula</th>
            <th scope="col">Telefono</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody id="tablaClientes">
    </tbody>
</table>

<div id="loading"></div>

<script type="module" src="./src/js/Clientes/cl_index.js"></script>