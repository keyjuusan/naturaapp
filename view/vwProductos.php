<div>
    <h2>Registro de Productos</h2>
    <form method="post" action="" id="f" class="d-flex flex-column gap-3">
        <div class="d-flex flex-column gap-2">
            <div class="row">
                <div class="col-4">
                    Codigo:
                    <input class="form-control" type="text" id="cedula" name="cedula" />
                    <span id="scedula"></span>
                </div>

                <div class="col-8">
                    Nombre:
                    <input class="form-control" type="text" id="apellido" name="apellido" />
                    <span id="sapellido"></span>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    PC:
                    <input class="form-control" type="text" id="nombre" name="nombre" />
                    <span id="snombre"></span>
                </div>

                <div class="col">
                    PVP:
                    <input class="form-control" type="text" id="telefono" name="telefono" />
                    <span id="stelefono"></span>
                </div>

                <div class="col">
                    Existencia:
                    <input class="form-control" type="text" id="telefono" name="telefono" />
                    <span id="stelefono"></span>
                </div>
            </div>

        </div>


        <div class="row d-flex flex-row gap-1">
            <div class="col">
                <button type="button" id="Incluir" class="w-100 btn btn-primary">Incluir</button>
            </div>

            <div class="col">
                <button type="button" id="Consultar" class="w-100 btn btn-primary">Consultar</button>
            </div>

            <div class="col">
                <button type="button" id="Modificar" class="w-100 btn btn-primary">Modificar</button>
            </div>

            <div class="col">
                <button type="button" id="Eliminar" class="w-100 btn btn-primary">Eliminar</button>
            </div>

            <div class="col">
                <a href="."><button type="button" id="Regresar" class="w-100 btn btn-primary">Regresar</button></a>
            </div>


        </div>

    </form>
</div>