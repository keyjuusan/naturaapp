<div>
    <h2>Registro de Usuarios</h2>
    <form method="post" action="" id="f">
        <div class=" d-flex flex-column gap-2">
            <div class="row">
                <div class="col-6">
                    <label class="form-label" for="cedula">Cedula:</label>
                    <input class="form-control " type="text" id="cedula" name="cedula" />
                    <span class="invalid-feedback" id="sCedula"></span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="usuario">Usuario:</label>
                    <input class="form-control" type="text" id="usuario" name="usuario" />
                </div>
                <div class="col">
                    <label for="clave">Clave:</label>
                    <input class="form-control" type="text" id="clave" name="clave" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                </div>
            </div>
            <div class="row d-flex flex-row gap-1">
                <div class="col">
                    <button type="button" class="w-100 btn btn-primary" id="incluir" name="incluir">INCLUIR</button>
                </div>
                <div class="col">
                    <button type="button" class="w-100 btn btn-primary" id="consultar" data-toggle="modal" data-target="#modal1" name="consultar">CONSULTAR</button>
                </div>
                <div class="col">
                    <button type="button" class="w-100 btn btn-primary" id="modificar" name="modificar">MODIFICAR</button>
                </div>
                <div class="col">
                    <button type="button" class="w-100 btn btn-primary" id="eliminar" name="eliminar">ELIMINAR</button>
                </div>
                <div class="col">
                    <a href="." class="w-100 btn btn-primary">REGRESAR</a>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="./src/js/usuarios.js"></script>