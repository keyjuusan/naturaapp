import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";

$(document).ready(()=>{
    btnAgregar("addEmpleados","formEmpleados");
    ocultarForm("formEmpleados");

    agregarValidacion("nombre", /^[a-zA-Z\b]*$/, /^[a-zA-Z\b]{3,}$/,"min 3 caracteres");
    
    agregarValidacion("contraseña", 
    /^[A-Za-z0-9!@#$%^&*()_+\b]*$/, 

    /^[A-Za-z0-9!@#$%^&*()_+\b]{8,}$/,

    "min 8 caracteres, mayusculas, simbolos y numeros");

    agregarValidacion("rcontraseña", 
    /[A-Za-z0-9!@#$%^&*()_+]*$/, 
    
    /[A-Za-z0-9!@#$%^&*()_+]{8,}$/,
    
    "min 8 caracteres, mayusculas, simbolos y numeros",
    "pass"
    );

    validarCampos("btnRegistrarEmpleados","nombre rcontraseña contraseña");

    //var re = /[A-Za-z0-9!@#$%^&*()_+]{8,}$/;
})