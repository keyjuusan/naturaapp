import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";

$(document).ready(()=>{
    btnAgregar("addCompras","formCompras");
    ocultarForm("formCompras");
    
    agregarValidacion("fecha", /^[0-9\b]*$/, /^[0-9\b/]$/,"","date");

    agregarValidacion("hora", /^[0-9\b]*$/, /^\d{2}:\d{2}:\d{2}$/,"","date");

    // agregarValidacion("descripcion", /^[0-9\b]*$/, /^[0-9\b]{7,11}$/,"min 7 y max 11 numeros");

    agregarValidacion("costo", /^[0-9\b]*$/, /^[0-9\b]{7,11}$/,"min 7 y max 11 numeros");

    validarCampos("btnRegistrarCompras","fecha hora costo");
})