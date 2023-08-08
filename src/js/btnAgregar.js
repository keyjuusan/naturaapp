export function btnAgregar(btnId,formId){
    $(`#${btnId}`).on("click",()=>{
        $(`#${formId}`).css({
            display: "flex",
            position: "absolute"
        });
    })

    
};