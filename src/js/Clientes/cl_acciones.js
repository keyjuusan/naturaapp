let nombreAnterior = ""

export const ACCIONES = {
    "registrar": (formElementId) => {
        const datos = new FormData($(`#${formElementId}`)[0]);
        datos.append("accion", "registrar");

        fetch("./controller/cClientes.php", {
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

        fetch("./controller/cClientes.php", {
            method: 'POST',
            body: datos
        })
            .then((res) => {

                if (res.ok) {


                    return res.json()
                } else {
                    throw new Error('Error en la conexion');
                }

            })
            .then(data => {
                $("#tablaClientes")[0].innerHTML = "";
                data.map(fila => {
                    $("#tablaClientes")[0].innerHTML += `<tr id="rowCliente">
            <th scope="row">${fila[0]}</th>
            <td>${fila[1]}</td>
            <td>${fila[2]}</td>
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

                $("*#btnEliminar").map((id, value) => {
                    $(value).click(() => {
                        ACCIONES["eliminar"](id);


                    });
                });

                $("*#btnEditar").map((id, value) => {
                    $(value).click(() => {
                        const fila = Object.values($("*#rowCliente")[id].children);
                        // console.log(typeof fila)
                        // const MAX_LENGTH = fila.length - 3;

                        $("#nombre")[0].value = fila[0].textContent;
                        nombreAnterior = fila[0].textContent;
                        $("#cedula")[0].value = fila[1].textContent;
                        $("#telefono")[0].value = fila[2].textContent;

                        $("#btnRegistrarClientes").addClass("d-none")
                        $("#btnModificarClientes").removeClass("d-none")

                        $("#formClientes").css({
                            display: "flex",
                            position: "absolute"
                        })

                    });
                })
            });
    },

    "eliminar": (index) => {
        const nombreCliente = $("*#rowCliente")[index].children[0].textContent;
        // console.log(nombreCliente);
        const datos = new FormData();
        datos.append("nombre", nombreCliente)
        datos.append("accion", "eliminar");

        fetch("./controller/cClientes.php", {
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
        datos.append("nombreAnterior", nombreAnterior)
        datos.append("accion", "actualizar");

        // console.log(nombreClienteAnterior);
        // console.table(datos.entrie);
        fetch("./controller/cClientes.php", {
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