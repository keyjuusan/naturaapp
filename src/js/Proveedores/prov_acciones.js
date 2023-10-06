let Codigo=""
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
                $("#tablaProveedores")[0].innerHTML = "";
                data.map(fila => {
                    // console.table(fila)
                    $("#tablaProveedores")[0].innerHTML += `<tr id="rowProveedor">
            <th scope="row">${fila[0]}</th>
            <td>${fila[2]}</td>
            <td>${fila[1]}</td>
            <td>
                <button id="btnEditar" class="btn-sm btn btn-warning ">
                    <img src="./src/assets/img/edit-svgrepo-com.svg" alt="" width="15">
                </button>
            </td>
            <td>
                <button id="btnEliminar" class="btn-sm btn btn-danger ">
                    <img src="./src/assets/img/delete-svgrepo-com.svg" alt="" width="15">
                </button>
            </td>
        </tr>`
                });

                $("*#btnEliminar").map((codigo, value) => {
                    $(value).click(() => {
                        ACCIONES["eliminar"](codigo);


                    });
                });

                $("*#btnEditar").map((codigo, value) => {
                    $(value).click(() => {
                        $("#codigo").attr("disabled","")
                        const fila = Object.values($("*#rowProveedor")[codigo].children);
                        // console.log(typeof fila)
                        // const MAX_LENGTH = fila.length - 3;

                        $("#empresa")[0].value = fila[1].textContent;
                        Codigo = fila[0].textContent;
                        $("#codigo")[0].value = fila[0].textContent;
                        $("#telefono")[0].value = fila[2].textContent;

                        $("#btnRegistrarProveedores").addClass("d-none")
                        $("#btnModificarProveedores").removeClass("d-none")

                        $("#formProveedores").css({
                            display: "flex",
                            position: "absolute"
                        })

                    });
                })
            });
    },

    "eliminar": (index) => {
        const codigo = $("*#rowProveedor")[index].children[0].textContent;
        // console.log(codigo);
        const datos = new FormData();
        datos.append("codigo", codigo)
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
        datos.append("codigo", Codigo)
        datos.append("accion", "actualizar");

        // console.log(empresaProveedorAnterior);
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