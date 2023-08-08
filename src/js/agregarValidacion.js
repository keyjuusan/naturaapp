export function agregarValidacion(campoNameId, exRegDown, exRegUp, mensaje, tipo) {
    let tecla, errDown, errUp, bienDown, bienUp;
    const campoId = $(`#${campoNameId}`);
    const span = $(`#s${campoNameId}`);


    const VALIDACIONES = {

        // DEFAULT
        undefined: () => {
            // VALIDA QUE SOLO LAS TECLAS ESPECIFICAS SEAN PERMITIDAS /^[0-9\b]*$/
            campoId.on("keydown", (e) => {
                tecla = String.fromCharCode(e.keyCode);
                errDown = exRegDown;
                bienDown = errDown.test(tecla);
                if (!bienDown) {
                    e.preventDefault();
                }
            })

            // VALIDA LO QUE YA SE HA ESCRITO EN EL INPUT /^[0-9\b]{7,9}$/
            campoId.on("keyup", () => {
                // console.log($("#cedula"))
                errUp = exRegUp;
                bienUp = errUp.test(campoId.val());
                if (bienUp) {
                    span.text("")
                    campoId.attr("class", "form-control is-valid");
                } else {
                    if (campoId.val() !== "") {
                        span.text(mensaje);
                        campoId.attr("class", "form-control is-invalid");
                    }else{
                        campoId.removeClass("is-invalid");
                    }
                }
            })

            campoId.on("click", () => {
                campoId.removeClass("is-invalid");
                span.text("");
            })
        },

        "pass": () => {
            // VALIDA QUE SOLO LAS TECLAS ESPECIFICAS SEAN PERMITIDAS /^[0-9\b]*$/
            campoId.on("keydown", (e) => {
                tecla = String.fromCharCode(e.keyCode);
                errDown = exRegDown;
                bienDown = errDown.test(tecla);
                if (!bienDown) {
                    e.preventDefault();
                }
            })

            // VALIDA LO QUE YA SE HA ESCRITO EN EL INPUT /^[0-9\b]{7,9}$/
            campoId.on("keyup", () => {
                // console.log($("#cedula"))
                errUp = exRegUp;
                bienUp = errUp.test(campoId.val());
                if (bienUp) {


                    campoId.keyup(() => {
                        if (campoId.val() !== $("#contraseña").val()) {
                            span.text("no coinciden las contraseñas")
                            campoId.attr("class", "form-control is-invalid");
                        } else {
                            span.text("");
                            campoId.attr("class", "form-control is-valid");
                        }
                    });
                } else {
                    if (campoId.val() !== "") {
                        span.text(mensaje);
                        campoId.attr("class", "form-control is-invalid");
                    }else{
                        campoId.removeClass("is-invalid");
                    }
                }
            })

            campoId.on("click", () => {
                campoId.removeClass("is-invalid");
                span.text("");
            })
        },
        "date": () => {
            const date = new Date()
            campoId[0].valueAsDate = date

            campoId.on("keydown", (e) => {
                tecla = String.fromCharCode(e.keyCode);
                errDown = exRegDown;
                bienDown = errDown.test(tecla);
                if (!bienDown) {
                    e.preventDefault();
                }
            })

            // VALIDA LO QUE YA SE HA ESCRITO EN EL INPUT /^[0-9\b]{7,9}$/
            campoId.on("keyup", () => {
                // console.log($("#cedula"))
                errUp = exRegUp;
                bienUp = errUp.test(campoId.val());
                if (bienUp) {
                    span.text("")
                    campoId.attr("class", "form-control is-valid");
                } else {
                    if (campoId.val() !== "") {
                        span.text(mensaje);
                        campoId.attr("class", "form-control is-invalid");
                    }else{
                        campoId.removeClass("is-invalid");
                    }
                }
            })

            campoId.on("click", (e) => {
                // console.log(e.target)
                campoId.removeClass("is-invalid");
                span.text("");
            })
        }
    };

    VALIDACIONES[tipo]();
}