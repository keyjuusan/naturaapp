import { notificacion } from "../notificacion.js";

let Id = "";
let datosConsulta = [];
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
        datosConsulta = data;
        $("#tablaUsuarios")[0].innerHTML = "";
        data.map((fila) => {
          // console.table(fila)
          $("#tablaUsuarios")[0].innerHTML += `<tr id="rowUsuario">
                    <th scope="row">${fila[0]}</th>
                    <td>${fila[1]}</td>
                    <td>${fila[2]}</td>
                    <td>${fila[3]}</td>
                    <td>
                        <button class="btn-sm btn btn-warning " id="btnEditar">
                            <img src="./src/assets/img/edit-svgrepo-com.svg" alt="" width="15">
                        </button>
                    </td>
                    <td>
                        <button class="btn-sm btn btn-danger " id="btnEliminar">
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
            const fila = Object.values($("*#rowUsuario")[id].children);
            Id = fila[0].textContent;
            let caja = [];
            datosConsulta.map((item) => {
              if (item.id == Id) {
                caja = item;
              }
            });
            $("#nombre")[0].value = caja.nombre;
            $("#cargo")[0].value = caja.cargo;
            $("#contraseña")[0].value = caja.contraseña;
            $("#rcontraseña")[0].value = caja.contraseña;

            $("#btnRegistrarUsuarios").addClass("d-none");
            $("#btnModificarUsuarios").removeClass("d-none");

            $("#formUsuarios").css({
              display: "flex",
              position: "absolute",
            });
          });
        });
      });
  },

  eliminar: (index) => {
    const nombreUsuario = $("*#rowUsuario")[index].children[0].textContent;
    // console.log(nombreUsuario);
    const datos = new FormData();
    datos.append("id", nombreUsuario);
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

    // console.log(nombreUsuarioAnterior);
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
