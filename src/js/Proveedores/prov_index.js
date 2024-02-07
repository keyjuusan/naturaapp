import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";
import { ACCIONES } from "./prov_acciones.js";

$(document).ready(() => {
  btnAgregar("addProveedores", "formProveedores", "Proveedores");
  ocultarForm(
    "formProveedores",
    "btnRegistrarProveedores",
    "btnModificarProveedores"
  );

  agregarValidacion(
    "empresa",
    /^[a-zA-Z\b\s]*$/,
    /^[a-zA-Z\b]{3,}$/,
    "min 3 caracteres"
  );

  agregarValidacion(
    "telefono",
    /^[0-9\b]*$/,
    /^[0-9\b]{7,11}$/,
    "min 7 y max 11 numeros"
  );
  
  $("#btnRegistrarProveedores").on("click", (e) => {
    e.preventDefault();
    let puedeEnviar = validarCampos("empresa nombre telefono");
    if (puedeEnviar) {
      ACCIONES["registrar"]("formProveedores");
      $("#formProveedores").hide();
    }
  });

  $("#btnModificarProveedores").on("click", (e) => {
    e.preventDefault();
    let puedeEnviar = validarCampos("empresa nombre telefono");
    if (puedeEnviar) {
      ACCIONES["modificar"]("formProveedores");
      $("#formProveedores").hide();
    }
  });

  const nCantidad = 3;
  let min = 0;

  ACCIONES.consultar(min, nCantidad);

  $("#btnSiguiente").click(() => {
    ("#");
    min += nCantidad;
    ACCIONES.consultar(min, nCantidad);

    $("#pagina")[0].value = Number($("#pagina")[0].value) + 1;
  });

  $("#btnAnterior").click(() => {
    min -= nCantidad;
    ACCIONES.consultar(min, nCantidad);

    $("#pagina")[0].value = Number($("#pagina")[0].value) - 1;
  });

  $("#pagina").change(() => {
    min = nCantidad * (Number($("#pagina")[0].value) - 1);
    ACCIONES.consultar(min, nCantidad);
  });
});
