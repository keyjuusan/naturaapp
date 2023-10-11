import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";
import { ACCIONES } from "./ga_acciones.js";

$(document).ready(()=>{
    btnAgregar("addGastos","formGastos","Gastos");
    ocultarForm("formGastos","btnRegistrarGastos","btnModificarGastos");

    agregarValidacion("fecha", /^[0-9\b]*$/, /^[0-9\b/]$/,"","date");

    agregarValidacion("hora", /^[0-9\b]*$/, /^\d{2}:\d{2}:\d{2}$/,"","time");

    // agregarValidacion("descripcion", /^[0-9\b]*$/, /^[0-9\b]{7,11}$/,"min 7 y max 11 numeros");

    agregarValidacion("costo", /^[0-9\b][.]*$/, /^[0-9\b]{1,}$/,"min 7 y max 11 numeros");
    

    ACCIONES["consultar"]();
    

    $("#btnRegistrarGastos").on("click", (e) => {
        e.preventDefault();
        let puedeEnviar = validarCampos("costo");
        if(puedeEnviar){
            ACCIONES["registrar"]("formGastos");
            $("#formGastos").hide();
        }
    })

    $("#btnModificarGastos").on("click", (e) => {
        e.preventDefault()
        let puedeEnviar = validarCampos("costo");
        if(puedeEnviar){
            ACCIONES["modificar"]("formGastos");
            $("#formGastos").hide();
        }
    })
})