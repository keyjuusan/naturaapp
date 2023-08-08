import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";

$(document).ready(()=>{
    btnAgregar("addProveedores","formProveedores");
    ocultarForm("formProveedores");

    agregarValidacion("empresa", /^[a-zA-Z\b]*$/,/^[a-zA-Z\b]{3,}$/,"min 3 caracteres");

    agregarValidacion("nombre",/^[a-zA-Z\b]*$/,/^[a-zA-Z\b]{3,}$/,"min 3 caracteres");
    
    agregarValidacion("telefono", /^[0-9\b]*$/, /^[0-9\b]{7,11}$/,"min 7 y max 11 numeros");

    validarCampos("btnRegistrarProveedores","empresa nombre telefono");
})