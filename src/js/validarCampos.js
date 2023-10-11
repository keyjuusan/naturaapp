export function validarCampos(campos) {
    const inputIdNames = campos.split(" ");
    let contador=0;
        inputIdNames.map((item) => {
            const campoName = $(`#${item}`);
            const campoNamespan = $(`#s${item}`);

            if (campoName.val() == "") {

                campoName.addClass("is-invalid")
                campoNamespan.text("*Campo requerido");
                contador++;
            }

            
        });
        if(contador == inputIdNames.length || contador>=1){
            return false;
        }else{
            return true;
        }

}