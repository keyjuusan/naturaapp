import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";
import { ACCIONES } from "./cl_acciones.js";

$(document).ready(() => {
    btnAgregar("addClientes", "formClientes");
    ocultarForm("formClientes","btnRegistrarClientes","btnModificarClientes");

    agregarValidacion("cedula", /^[0-9\b]*$/, /^[0-9\b]{7,9}$/, "min 7 y max 9 numeros");

    agregarValidacion("nombre", /^[a-zA-Z\b]*$/, /^[a-zA-Z\b]{3,}$/, "min 3 caracteres");

    agregarValidacion("telefono", /^[0-9\b]*$/, /^[0-9\b]{7,11}$/, "min 7 y max 11 numeros");

    //comportamiento visual

    ACCIONES["consultar"]();

    $("#btnRegistrarClientes").on("click", (e) => {
        e.preventDefault();
        let puedeEnviar = validarCampos("cedula nombre telefono");
        if(puedeEnviar){
            ACCIONES["registrar"]("formClientes");
            $("#formClientes").hide();
        }
    })

    $("#btnModificarClientes").on("click", (e) => {
        e.preventDefault()
        let puedeEnviar = validarCampos("cedula nombre telefono");
        if(puedeEnviar){
            ACCIONES["modificar"]("formClientes");
            $("#formClientes").hide();
        }
    })

})