import { notificacion } from "../notificacion.js";

let Id = "";
let datosConsulta = [];
let nCantidad = 3;
let Min = 0;
export const ACCIONES = {
  registrar: (formElementId) => {
    const FD = new FormData($(`#${formElementId}`)[0]);
    // const datos = Object.fromEntries(FD);
    // datos.hora = datos.hora.slice(0, 8)
    // datos.accion = "registrar"
    // console.log(FD.get("proveedores"))
    FD.append("accion", "registrar");
    fetch("", {
      method: "POST",
      body: FD,
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data);
        ACCIONES["consultar"](Min,nCantidad);
        notificacion("vwBody", data.mensaje, data.bol);
      })
      .catch((err) => {
        notificacion("vwBody", err.mensaje, err.bol);
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
        $("#tablaGastos")[0].innerHTML = "";
        data.map((fila) => {
          $("#tablaGastos")[0].innerHTML += `<tr id="rowGasto">
            <th scope="row">${fila.id}</th>
            <td>${fila.descripcion}</td>
            <td>${fila.categoria}</td>
            <td>${fila.precio}$</td>
            <td>${fila.hora}</td>
            <td>${fila.fecha}</td>
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
            const fila = Object.values($("*#rowGasto")[id].children);
            Id = fila[0].textContent;
            let caja = [];
            datosConsulta.map((item) => {
              if (item.id == Id) {
                caja = item;
              }
            });
            // console.log(caja);

            $("#descripcion")[0].value = caja.descripcion;
            $("#categoria")[0].value = caja.categoria;
            $("#precio")[0].value = caja.precio;
            $("#fecha")[0].value = caja.fecha;
            $("#hora")[0].value = caja.hora;

            $("#btnRegistrarGastos").addClass("d-none");
            $("#btnModificarGastos").removeClass("d-none");

            $("#formGastos").css({
              display: "flex",
              position: "absolute",
            });
          });
        });
      });
  },

  eliminar: (index) => {
    const nombreCliente = $("*#rowGasto")[index].children[0].textContent;
    // console.log(nombreCliente);
    const datos = new FormData();
    datos.append("id", nombreCliente);
    datos.append("accion", "eliminar");

    fetch("", {
      method: "POST",
      body: datos,
    })
      .then((res) => res.json())
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
      .then((res) => res.json())
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
