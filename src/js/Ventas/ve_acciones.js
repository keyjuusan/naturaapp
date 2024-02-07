let Id = "";
let datosConsulta = [];
const allClientes = [];
let nCantidad = 3;
let Min = 0;
export const ACCIONES = {
  registrar: (formElementId) => {
    const FD = new FormData($(`#${formElementId}`)[0]);
    FD.append("accion", "registrar");
    fetch("", {
      method: "POST",
      body: FD,
    })
      .then((res) => res.text())
      .then((data) => {
        console.log(data);
        ACCIONES["consultar"](Min,nCantidad);
        notificacion("vwBody", data.mensaje, data.bol);
      })
      .catch((err) => {
        notificacion("vwBody", err.mensaje, err.bol);
      });
  },

  consultarClientes: () => {
    const datos = new FormData();
    datos.append("accion", "consultarClientes");

    let clientes = "";
    clientes = "<option value=''>--</option>";

    fetch("", { method: "POST", body: datos })
      .then((res) => res.json())
      .then((data) => {
        data.map((item) => {
          allClientes.push(item);
          clientes += `<option value="${item.id}">${item.nombre}</option>`;
        });
        // console.log(allClientes)

        $("#clientes").html(clientes);
      });
  },

  consultar: (min, cantidad) => {
    Min = min;
    nCantidad = cantidad;
    const datos = new FormData();
    datos.append("min", min);
    datos.append("cantidad", cantidad);
    datos.append("accion", "consultar");

    fetch("", {
      method: "POST",
      body: datos,
    })
      .then((res) => {
        if (res.ok) {
          $("#loader").hide();

          return res.json();
        } else {
          throw new Error("Error en la conexion");
        }
      })
      .then((data) => {
        datosConsulta = data;
        $("#tablaVentas")[0].innerHTML = "";
        data.map((fila) => {
          $("#tablaVentas")[0].innerHTML += `<tr id="rowVenta">
            <th scope="row">${fila.id}</th>
            <td>${fila.descripcion}</td>
            <td>${fila.precio}$</td>
            <td>${fila.fecha}</td>
            <td>${fila.hora}</td>
            <td>${fila.id_producto}</td>  
            <td>${fila.id_empleado}</td>  
            <td>${fila.id_cliente}</td>
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
        </tr>`;
        });

        $("*#btnEliminar").map((id, value) => {
          $(value).click(() => {
            ACCIONES["eliminar"](id);
          });
        });

        $("*#btnEditar").map((id, value) => {
          $(value).click(() => {
            const fila = Object.values($("*#rowVenta")[id].children);
            Id = fila[0].textContent;
            let caja = [];
            datosConsulta.map((item) => {
              if (item.id == Id) {
                caja = item;
              }
            });
            // console.log(caja);

            $("#descripcion")[0].value = caja.descripcion;
            $("#precio")[0].value = caja.precio;
            $("#clientes")[0].value = caja.id_cliente;
            $("#fecha")[0].value = caja.fecha;
            $("#hora")[0].value = caja.hora;

            $("#btnRegistrarVentas").addClass("d-none");
            $("#btnModificarVentas").removeClass("d-none");

            $("#formVentas").css({
              display: "flex",
              position: "absolute",
            });
          });
        });
      });
  },

  eliminar: (index) => {
    const nombreCliente = $("*#rowVenta")[index].children[0].textContent;
    // console.log(nombreCliente);
    const datos = new FormData();
    datos.append("id", nombreCliente);
    datos.append("accion", "eliminar");

    fetch("", {
      method: "POST",
      body: datos,
    })
      .then((res) => res.text())
      .then((data) => {
        console.log(data);
        ACCIONES["consultar"](Min,nCantidad);
        notificacion("vwBody", data.mensaje, data.bol);
      })
      .catch((err) => {
        notificacion("vwBody", err.mensaje, err.bol);
      });
  },
  modificar: (formElementId) => {
    const datos = new FormData($(`#${formElementId}`)[0]);
    datos.append("id", Id);
    datos.append("accion", "actualizar");

    // console.log(nombreClienteAnterior);
    // console.table(datos.entrie);
    fetch("", {
      method: "POST",
      body: datos,
    })
      .then((res) => res.text())
      .then((data) => {
        console.log(data);
        ACCIONES["consultar"](Min,nCantidad);
        notificacion("vwBody", data.mensaje, data.bol);
      })
      .catch((err) => {
        notificacion("vwBody", err.mensaje, err.bol);
      });
  },
};
