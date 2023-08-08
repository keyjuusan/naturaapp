export function ocultarForm(formId) {

    $(document).on("click", (e) => {
        if ($(`#${formId}`).css("display") == "flex" && $(`#addClientes`)[0] != $(e)[0].target) {
         
            if ($(e)[0].target === $(`#vwBody`)[0]) {
                $(`#${formId}`).css({
                    display: "none",
                });
            }
        }
    });
}