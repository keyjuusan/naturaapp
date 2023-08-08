import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";

$(document).ready(()=>{
    btnAgregar("addProductos","formProductos");
    ocultarForm("formProductos");

    agregarValidacion("cantidad", /^[0-9\b]*$/, /^[0-9\b]{1,}$/,"min 1 numero");

    agregarValidacion("nombre",/^[a-zA-Z\b]*$/,/^[a-zA-Z\b]{3,}$/,"min 3 caracteres");

    agregarValidacion("presentacion",/^[0-9a-zA-Z\b]*$/,/^[0-9a-zA-Z\b]{3,}$/,"min 3 caracteres");
    
    validarCampos("btnRegistrarProductos","cantidad presentacion nombre");
})