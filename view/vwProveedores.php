
    <h2 class="text-center fs-11">Proveedores</h2>
    <div class="d-flex justify-content-center">
    <!-- <a href="." class="p_2 rounded-5 h-2rem w-2rem d-flex justify-content-center align-items-center start-0 ms-5 position-absolute bg-white shadow">
        <img src="./src/assets/img/return-up-back-outline-svgrepo-com.svg" alt="" width="20">
    </a> -->
        <button id="addProveedores" class="btn  btn-apple text-white d-flex gap-1 flex-row justify-content-center">
            <img width="22" src="./src/assets/img/add-circle-svgrepo-com.svg" alt="">
            Registrar Proveedor
        </button>
    </div>

    <form method="post" action="" id="formProveedores" class="col-8 p-2 h-auto align-items-center bg-white rounded-3 bg-opacity-25 shadow" style="display: none;">
    <div class=" d-flex flex-column gap-2">
        <!-- empresa, nombre y telefono -->
        <div class="row gap-2 d-flex justify-content-center">
            <div class="col-5 col-lg-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input class="form-control " type="text" id="nombre" name="nombre" />
                <span class=" invalid-feedback" id="snombre"></span>
            </div>
        

        
            <div class="col-5 col-lg-3">
                <label class="form-label" for="empresa">Empresa:</label>
                <input class="form-control " type="text" id="empresa" name="empresa" />
                <span class="invalid-feedback" id="sempresa"></span>
            </div>
            <div class="col-5 col-lg-3">
                <label class=" form-label" for="telefono">Teléfono:</label>
                <input class="form-control " type="text" id="telefono" name="telefono" />
                <span class="invalid-feedback" id="stelefono"></span>
            </div>

            <div class="col-5 col-lg-3 d-flex flex-column justify-content-end">
                <button type="button" class="w-100 btn btn-primary" id="btnRegistrarProveedores" name="incluir">Registrar</button>
            </div>
        </div>
    </div>
</form>

<table  class="table rounded-3 fs-8">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">empresa</th>
            <th scope="col">Telefono</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody id="tablaProveedores">
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

    <script type="module" src="./src/js/Proveedores/prov_index.js"></script>