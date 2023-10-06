let Id = "";
let datosConsulta = [];
export const ACCIONES = {
    "registrar": (formElementId) => {
        const datos = new FormData($(`#${formElementId}`)[0]);
        datos.append("accion", "registrar");

        fetch("", {
            method: 'POST',
            body: datos
        })
            .then((res) => res.text())
            .then(data => {
                console.log(data)
                ACCIONES["consultar"]();
            });

    },

    "consultar": () => {
        const datos = new FormData();
        datos.append("accion", "consultar");

        fetch("", {
            method: 'POST',
            body: datos
        })
            .then((res) => {

                if (res.ok) {

                    $("#loader").hide()

                    return res.json()
                } else {
                    throw new Error('Error en la conexion');
                }

            })
            .then(data => {
                datosConsulta = data;
                $("#productos")[0].innerHTML = "";
                data.map(caja => {
                    $("#productos")[0].innerHTML += `<div id="${caja[0]}" class="w-9rem position-relative h-9rem bg-apple rounded-2 d-flex flex-column align-items-center justify-content-end" style="overflow:hidden">
                    <p class="m-0 text-white fw-semibold w-100 row px-2">${caja[2]}</p>
                    <div class="d-flex flex-column bg-white w-100 px-2">
                        <p class="m-0 fs-7">Precio: ${caja[6]}$</p>
                        <p class="m-0 fs-7">Disponibles: ${caja[3]}</p>
                    </div>
                    <div class="position-absolute top-0 w-100 d-flex justify-content-between">
                        <button id="btnEditar" class="d-flex align-items-center justify-content-center border-0 " style=" width:1.2rem; height:1.2rem; background-color: #ffffff88;">
                            <img src="./src/assets/img/custom-edit-svgrepo-com.svg" alt="" width="15">
                        </button>
                        <button id="btnEliminar" class="d-flex align-items-center justify-content-center border-0 " style=" width:1.2rem; height:1.2rem; background-color: #ffffff88;">
                            <img src="./src/assets/img/custom-delete-svgrepo-com.svg" alt="" width="15">
                        </button>
                    </div>
                </div>`
                });

                $("*#btnEliminar").map((id, value) => {
                    $(value).click((e) => {
                        let idProducto = e.currentTarget.offsetParent.parentNode.id;
                        // console.log()
                        ACCIONES["eliminar"](idProducto);


                    });
                });

                $("*#btnEditar").map((id, value) => {
                    $(value).click((e) => {
                        let idProducto = e.currentTarget.offsetParent.parentNode.id;
                        let caja=[];
                        datosConsulta.map((item)=>{
                            if (item.id ==idProducto) {
                                caja=item
                            }
                        })
                        // console.log(typeof caja)
                        // const MAX_LENGTH = caja.length - 3;

                        $("#nombre")[0].value = caja.nombre;
                        Id = idProducto;
                        $("#categoria")[0].value = caja.categoria;
                        $("#cantidad")[0].value = caja.cantidad;
                        $("#presentacion")[0].value = caja.presentacion;
                        $("#precio")[0].value = caja.precio;
                        $("#descripcion")[0].value = caja.descripcion;

                        $("#btnRegistrarProductos").addClass("d-none")
                        $("#btnModificarProductos").removeClass("d-none")

                        $("#formProductos").css({
                            display: "flex",
                            position: "absolute"
                        })

                    });
                })
            });
    },

    "eliminar": (idProducto) => {
        console.log(idProducto)
        // const idProducto = $("*#boxProducto")[index].children[0].textContent;
        // // console.log(idProducto);
        const datos = new FormData();
        datos.append("id", idProducto)
        datos.append("accion", "eliminar");

        fetch("", {
            method: 'POST',
            body: datos
        })
            .then((res) => res.text())
            .then(data => {
                console.log(data)
                ACCIONES["consultar"]();
            })



    },
    "modificar": (formElementId) => {
        const datos = new FormData($(`#${formElementId}`)[0]);
        datos.append("id", Id)
        datos.append("accion", "actualizar");

        // console.log(nombreProductoAnterior);
        // console.table(datos.entrie);
        fetch("", {
            method: 'POST',
            body: datos
        })
            .then((res) => res.text())
            .then(data => {
                console.log(data)
                ACCIONES["consultar"]();
            });
    }
};