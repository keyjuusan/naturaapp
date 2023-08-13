export function btnAgregar(btnId, formId) {
    $(`#${btnId}`).on("click", () => {
        $("#btnRegistrarClientes").removeClass("d-none")
        $("#btnModificarClientes").addClass("d-none")

        $(`#${formId}`).css({
            display: "flex",
            position: "absolute"
        });
    })


};