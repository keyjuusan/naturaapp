<!-- <div class="d-flex flex-column w-100 container h-100 gap-3 mt-4"> -->
    <div class="d-flex flex-row justify-content-between">
        <form class="d-flex justify-content-evenly flex-row h-2rem p-1 col-3 bg-white rounded-2">
            <img class="order-2" src="./src/assets/img/search-alt-1-svgrepo-com.svg" width="22" alt="">
            <input class="rounded-2 border-0 col-10" placeholder="Buscar..." type="text">
        </form>
        <h2 class="fs-11">Inventario</h2>
    </div>

    <div class="d-flex justify-content-center">
        <button id="addProductos" class="btn  btn-apple text-white d-flex gap-1 flex-row justify-content-center">
            <img width="22" src="./src/assets/img/add-circle-svgrepo-com.svg" alt="">
            Agregar Producto
        </button>
    </div>

    <form method="post" action="" id="formProductos" class="col-9 p-2 h-auto align-items-center bg-white rounded-3 bg-opacity-25 shadow" style="display: none;">
        <div class=" d-flex flex-column gap-2">
            <!-- categoria, nombre y cantidad -->
            <div class="row gap-2 d-flex justify-content-center">
                <div class="row">
                    <div class="col ">
                        <label class="form-label" for="nombre">Nombre:</label>
                        <input class="form-control " type="text" id="nombre" name="nombre" />
                        <span class=" invalid-feedback" id="snombre"></span>
                    </div>
                    <div class="col ">
                        <label class="form-label" for="categoria">Categoria:</label>
                        <select class="form-select " id="categoria" name="categoria">
                            <option value=""></option>
                            <option value="analgesico">Analgesico</option>
                            <option value="analgesico">Analgesico</option>
                            <option value="analgesico">Analgesico</option>
                        </select>
                        <span class="invalid-feedback" id="scategoria"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col ">
                        <label class=" form-label" for="cantidad">Cantidad:</label>
                        <input class="form-control " type="number" id="cantidad" name="cantidad" />
                        <span class="invalid-feedback" id="scantidad"></span>
                    </div>
                    <div class="col ">
                        <label class="form-label" for="presentacion">Presentacion:</label>
                        <input class="form-control " type="text" id="presentacion" name="presentacion" />
                        <span class=" invalid-feedback" id="spresentacion"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="form-label" for="descripcion">Descripción del Producto:</label>
                        <textarea class="form-control" id="descripcion" rows="5" cols="60" maxlength="79" name="descripcion" placeholder="Escriba aquí mas detalles acerca del producto."></textarea>
                        <span class="invalid-feedback" id="sdescripcion"></span>
                    </div>
                </div>

                <div class="col-5  d-flex flex-column justify-content-end">
                    <button type="button" class="w-100 btn btn-primary" id="btnRegistrarProductos" name="incluir">Registrar</button>
                </div>
            </div>
        </div>
    </form>

    <div id="productos" class="d-flex flex-row flex-wrap gap-2 h-auto">
        <div class="w-9rem h-9rem bg-white rounded-2"></div>
        <div class="w-9rem h-9rem bg-white rounded-2"></div>
        <div class="w-9rem h-9rem bg-white rounded-2"></div>
    </div>

<!-- </div> -->

<script type="module" src="./src/js/Productos/prod_index.js"></script>