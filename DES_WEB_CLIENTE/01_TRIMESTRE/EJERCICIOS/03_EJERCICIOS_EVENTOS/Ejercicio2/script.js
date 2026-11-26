const parrafoInfo = document.getElementById("tecla-pulsada");

// Escuchamos 'keydown' en todo el documento para detectar cualquier tecla

document.addEventListener("keydown", (event) =>{

    parrafoInfo.innerHTML = `
        <b>Key: </b> ${event.key} <br> 
        <b>Code: </b> ${event.code} <br>
        <b>Repeat: </b> ${event.repeat} <br>
        <b>isComposing: </b> ${event.isComposing} <br>
        <b>Target: </b> ${event.target} <br>
    `;
    /**
     * event.key -> El VALOR de la tecla pulsada
     * event.code -> La tecla física del teclado
     * event.repeat -> Devuelve true o false si se mantiene pulsada
     * event.isComposing -> Indica si la tecla forma parte de una composicion de texto
     * event.target -> El elemento HTML exacto donde se ha originado el evento
     * 
     */
})