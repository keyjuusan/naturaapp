$(document).ready(()=>{

    // VALIDA QUE SOLO LAS TECLAS ESPECIFICAS SEAN PERMITIDAS
    $("#cedula").on("keydown",(e)=>{
        tecla = String.fromCharCode(e.keyCode);
        err = /^[0-9\b]*$/;
        bien = err.test(tecla);
        if(!bien){
            e.preventDefault();
        }
    })

    // VALIDA LO QUE YA SE HA ESCRITO EN EL INPUT
    $("#cedula").on("keyup",()=>{
        // console.log($("#cedula"))
        err = /^[0-9\b]{7,9}$/;
        bien = err.test($("#cedula").val());
        if(bien){
            $("#sCedula").text("")
            $("#cedula").attr("class","form-control is-valid");
        }else{
            $("#sCedula").text("Debe tener minimo 7 caracteres y maximo 9 caracteres");
            $("#cedula").attr("class","form-control is-invalid");
        }
    })
});