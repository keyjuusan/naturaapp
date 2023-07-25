<div>
    <h2 class="text-center">Cargos Adicionales</h2>
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#factura" role="tab" data-bs-toggle="tab">Datos de la factura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#detalles" role="tab" data-bs-toggle="tab">Detalles de Factura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#deposito" role="tab" data-bs-toggle="tab">Ubicación de productos</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="factura">
                DATOS DE LA FACTURA
            </div>
            <div role="tabpanel" class="tab-pane" id="detalles">
                DETALLES DE LA FACTURA
            </div>
            <div role="tabpanel" class="tab-pane" id="deposito">
                LUGAR DONDE SE DEPOSITARA LA COMPRA
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
    </div>

    <!-- <div class="container">
        <ul class="nav nav-underline" role="tablist">
            <li role="presentation" class="nav-item">
                <a role="tab" id="factura-tap" href="#factura" class="nav-link active" data-bs-toggle="tab" data-bs-target="#factura" aria-controls="factura" aria-selected="true">Datos de factura</a>
            </li>
            <li role="presentation" class="nav-item">
                <a role="tab" id="detalles-tap" href="#detalles" class="nav-link" data-bs-toggle="tab" data-bs-target="#detalles" aria-controls="detalles" aria-selected="false">Detalles de factura</a>
            </li>
            <li role="presentation" class="nav-item">
                <a role="tab" id="deposito-tap" href="#deposito" class="nav-link" data-bs-toggle="tab" data-bs-target="#deposito" aria-controls="deposito" aria-selected="false">Destino de deposito</a>
            </li>
        </ul>
        <div class="tab-content" >
            <div role="tabpanel" class="tap-pane fade show active"  id="factura" aria-labelledby="factura-tap" tabindex="0">
                DATOS DE LA FACTURA
            </div>
            <div role="tabpanel" class="tap-pane fade"  id="detalles" aria-labelledby="detalles-tap" tabindex="0">
                DETALLES DE LA FACTURA
            </div>
            <div role="tabpanel" class="tap-pane fade"  id="deposito" aria-labelledby="deposito-tap" tabindex="0">
                DESTINO DE DEPOSITO
            </div>
        </div> -->
</div>

</div>