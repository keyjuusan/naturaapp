import { agregarValidacion } from "../agregarValidacion.js";
import { btnAgregar } from "../btnAgregar.js";
import { ocultarForm } from "../ocultarForm.js";
import { validarCampos } from "../validarCampos.js";
import { ACCIONES } from "./cl_acciones.js";

$(document).ready(() => {
    btnAgregar("addClientes", "formClientes");
    ocultarForm("formClientes");

    agregarValidacion("cedula", /^[0-9\b]*$/, /^[0-9\b]{7,9}$/, "min 7 y max 9 numeros");

    agregarValidacion("nombre", /^[a-zA-Z\b]*$/, /^[a-zA-Z\b]{3,}$/, "min 3 caracteres");

    agregarValidacion("telefono", /^[0-9\b]*$/, /^[0-9\b]{7,11}$/, "min 7 y max 11 numeros");

    //comportamiento visual
    validarCampos("btnRegistrarClientes", "cedula nombre telefono");

    ACCIONES["consultar"]();

    $("#formClientes").on("submit", (e) => {
        e.preventDefault()
        ACCIONES["registrar"]("formClientes")
    })


})