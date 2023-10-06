export function ocultarForm(formId,btnReg,btnMod) {

    $(`#${btnReg}`).click(e=>{
        e.preventDefault()
        $(`#${formId}`).hide();
    });

    $(`#${btnMod}`).click(e=>{
        e.preventDefault()
        $(`#${formId}`).hide();
    });

    $(document).on("click", (e) => {
        if ($(`#${formId}`).css("display") == "flex" && $(`#addClientes`)[0] != $(e)[0].target) {

            if ($(e)[0].target === $(`#vwBody`)[0]) {
                $(`#${formId}`).css({
                    display: "none",
                });
                // $("#nombre")[0].value = ""
                // $("#cedula")[0].value = ""
                // $("#telefono")[0].value = ""
            }
        }
    });
}