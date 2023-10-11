import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";
import { ACCIONES } from "./co_acciones.js";

$(document).ready(()=>{
    btnAgregar("addCompras","formCompras","Compras");
    ocultarForm("formCompras","btnRegistrarCompras","btnModificarCompras");

    agregarValidacion("fecha", /^[0-9\b]*$/, /^[0-9\b/]$/,"","date");

    agregarValidacion("hora", /^[0-9\b]*$/, /^\d{2}:\d{2}:\d{2}$/,"","time");

    // agregarValidacion("descripcion", /^[0-9\b]*$/, /^[0-9\b]{7,11}$/,"min 7 y max 11 numeros");

    agregarValidacion("costo", /^[0-9\b][.]*$/, /^[0-9\b]{1,}$/,"min 7 y max 11 numeros");
    
    

    ACCIONES.consultarProveedores();
    ACCIONES["consultar"]();
    

    $("#btnRegistrarCompras").on("click", (e) => {
        e.preventDefault();
        let puedeEnviar = validarCampos("costo");
        if(puedeEnviar){
            ACCIONES["registrar"]("formCompras");
            $("#formCompras").hide();
        }
    })

    $("#btnModificarCompras").on("click", (e) => {
        e.preventDefault()
        let puedeEnviar = validarCampos("costo");
        if(puedeEnviar){
            ACCIONES["modificar"]("formCompras");
            $("#formCompras").hide();
        }
    })
})