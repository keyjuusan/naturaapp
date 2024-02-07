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
    <div class=" d-flex flex-column gap-2 w-100">
        
        <div class="row gap-2 d-flex">

            <div class="col col-lg-3">
                <label class="form-label" for="empresa">Empresa:</label>
                <input class="form-control " type="text" id="empresa" name="empresa" />
                <span class="invalid-feedback" id="sempresa"></span>
            </div>
            <div class="col col-lg-3">
                <label class=" form-label" for="telefono">Teléfono:</label>
                <input class="form-control " type="text" id="telefono" name="telefono" />
                <span class="invalid-feedback" id="stelefono"></span>
            </div>
        </div>

        <div class="row d-flex ">
            <div class="col-5 col-lg-3 d-flex flex-column justify-content-center">
                <button type="button" class="w-100 btn btn-primary" id="btnRegistrarProveedores" name="incluir">Registrar</button>
                <button type="button" class="w-100 d-none btn btn-primary" id="btnModificarProveedores" name="incluir">Modificar</button>
            </div>
        </div>
    </div>
</form>

<table class="table rounded-3 fs-8">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Empresa</th>
            <th scope="col">Telefono</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody id="tablaProveedores">
        </tbody>
    </table>
    <span class="loader" id="loader"></span>
    <div class="flex gap-2" >
        <button id="btnAnterior" class="text-[1.5rem] flex items-center justify-center " > < </button>   
        <input id="pagina" type="number" value="1" class="w-[2rem] flex" >
        <button id="btnSiguiente" class="text-[1.5rem] flex items-center justify-center " > > </button>
    </div>

<script type="module" src="./src/js/Proveedores/prov_index.js"></script>