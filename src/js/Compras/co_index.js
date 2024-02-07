import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";
import { ACCIONES } from "./co_acciones.js";

$(document).ready(() => {
  btnAgregar("addCompras", "formCompras", "Compras");
  ocultarForm("formCompras", "btnRegistrarCompras", "btnModificarCompras");

  agregarValidacion("fecha", /^[0-9\b]*$/, /^[0-9\b/]$/, "", "date");

  agregarValidacion("hora", /^[0-9\b]*$/, /^\d{2}:\d{2}:\d{2}$/, "", "time");

  // agregarValidacion("descripcion", /^[0-9\b]*$/, /^[0-9\b]{7,11}$/,"min 7 y max 11 numeros");

  agregarValidacion(
    "precio",
    /^[0-9\b][.]*$/,
    /^[0-9\b]{1,}$/,
    "min 7 y max 11 numeros"
  );

  ACCIONES.consultarProveedores();

  $("#btnRegistrarCompras").on("click", (e) => {
    e.preventDefault();
    let puedeEnviar = validarCampos("precio");
    if (puedeEnviar) {
      ACCIONES["registrar"]("formCompras");
      $("#formCompras").hide();
    }
  });

  $("#btnModificarCompras").on("click", (e) => {
    e.preventDefault();
    let puedeEnviar = validarCampos("precio");
    if (puedeEnviar) {
      ACCIONES["modificar"]("formCompras");
      $("#formCompras").hide();
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
