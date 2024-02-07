import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";
import { ACCIONES } from "./prod_acciones.js";

$(document).ready(() => {
  btnAgregar("addProductos", "formProductos");
  ocultarForm(
    "formProductos",
    "btnRegistrarProductos",
    "btnModificarProductos"
  );

  agregarValidacion("cantidad", /^[0-9\b]*$/, /^[0-9\b]{1,}$/, "min 1 numero");

  agregarValidacion(
    "nombre",
    /^[a-zA-Z\b]*$/,
    /^[a-zA-Z\b]{3,}$/,
    "min 3 caracteres"
  );

  agregarValidacion(
    "presentacion",
    /^[0-9a-zA-Z\b]*$/,
    /^[0-9a-zA-Z\b]{3,}$/,
    "min 3 caracteres"
  );

  $("#btnRegistrarProductos").on("click", (e) => {
    e.preventDefault();
    let puedeEnviar = validarCampos("cantidad presentacion nombre");
    if (puedeEnviar) {
      ACCIONES["registrar"]("formProductos");
      $("#formProductos").hide();
    }
  });

  $("#btnModificarProductos").on("click", (e) => {
    e.preventDefault();
    let puedeEnviar = validarCampos("cantidad presentacion nombre");
    if (puedeEnviar) {
      ACCIONES["modificar"]("formProductos");
      $("#formProductos").hide();
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
