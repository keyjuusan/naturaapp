export const notificacion = (elementId,mensaje,bol)=>{
    const padre = document.querySelector(`#${elementId}`);
    const span = document.createElement("span");
    const margen = "10px"
    const altura = "56px"
    span.style.position = "absolute"
    span.style.right = margen
    span.style.bottom = margen
    span.style.padding = "1rem"
    span.style.borderRadius = "6px"
    span.style.backgroundColor = "white"
    span.style.boxShadow = "1px 1px 3px 1px #b9b9b9"
    span.style.color = bol ? "green":"red"
    span.textContent = mensaje;

    padre.appendChild(span)
    setTimeout(()=>{
        padre.removeChild(span)
    },2000)
}