import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { resetForm } from "../resetForm.js";
import { validarCampos } from "../validarCampos.js";
import { ACCIONES } from "./usu_acciones.js";

$(document).ready(()=>{
    btnAgregar("addUsuarios","formUsuarios","Usuarios");
    ocultarForm("formUsuarios");

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

    

    ACCIONES["consultar"]();

    $("#btnRegistrarUsuarios").on("click", (e) => {
        e.preventDefault();
        let puedeEnviar = validarCampos("nombre rcontraseña contraseña");
        if(puedeEnviar){
            ACCIONES["registrar"]("formUsuarios");
            $("#formUsuarios").hide();
        }
    })

    $("#btnModificarUsuarios").on("click", (e) => {
        e.preventDefault()
        let puedeEnviar = validarCampos("nombre rcontraseña contraseña");
        if(puedeEnviar){
            ACCIONES["modificar"]("formUsuarios");
            $("#formUsuarios").hide();
        }
    })
})