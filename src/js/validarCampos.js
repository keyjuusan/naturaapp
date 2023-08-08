export function validarCampos(btnValidadorId, campos) {
    const btnValiId = $(`#${btnValidadorId}`);
    const inputIdNames = campos.split(" ");

    btnValiId.click(() => {
        inputIdNames.map((item) => {
            const campoName = $(`#${item}`);
            const campoNamespan = $(`#s${item}`);

            if (campoName.val() == "") {

                campoName.addClass("is-invalid")
                campoNamespan.text("*Campo requerido");
            }
        });
    });

}