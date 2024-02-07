import { notificacion } from "../notificacion.js";

let Id = "";
let nCantidad = 3;
let Min = 0;
export const ACCIONES = {
  registrar: (formElementId) => {
    const datos = new FormData($(`#${formElementId}`)[0]);
    datos.append("accion", "registrar");

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
        $("#tablaProveedores")[0].innerHTML = "";
        data.map((fila) => {
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
        </tr>`;
        });

        $("*#btnEliminar").map((id, value) => {
          $(value).click(() => {
            ACCIONES["eliminar"](id);
          });
        });

        $("*#btnEditar").map((id, value) => {
          $(value).click(() => {
            $("#id").attr("disabled", "");
            const fila = Object.values($("*#rowProveedor")[id].children);
            // console.log(typeof fila)
            // const MAX_LENGTH = fila.length - 3;

            $("#empresa")[0].value = fila[1].textContent;
            Id = fila[0].textContent;
            $("#telefono")[0].value = fila[2].textContent;

            $("#btnRegistrarProveedores").addClass("d-none");
            $("#btnModificarProveedores").removeClass("d-none");

            $("#formProveedores").css({
              display: "flex",
              position: "absolute",
            });
          });
        });
      });
  },

  eliminar: (index) => {
    const id = $("*#rowProveedor")[index].children[0].textContent;
    // console.log(id);
    const datos = new FormData();
    datos.append("id", id);
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

    // console.log(empresaProveedorAnterior);
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
