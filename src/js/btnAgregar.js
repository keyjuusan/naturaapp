import { resetForm } from "./resetForm.js"

export function btnAgregar(btnId, formId,nombreVista) {
    $(`#${btnId}`).on("click", () => {
        resetForm(`#${formId}`)
        $("#codigo").removeAttr("disabled")

        $(`#btnRegistrar${nombreVista}`).removeClass("d-none")
        $(`#btnModificar${nombreVista}`).addClass("d-none")

        $(`#${formId}`).css({
            display: "flex",
            position: "absolute"
        });
    })


};