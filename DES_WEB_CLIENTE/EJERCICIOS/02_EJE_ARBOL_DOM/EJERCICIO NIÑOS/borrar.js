window.onload = function borrarHijos(){
    document.querySelector("input[type='button']");

    boton.onclick = function(){
        let hijos = document.querySelector("section").children;

        for (let i = 0; i < array.length; i++) {
            let papi = hijos[i].parentNode;
            papi.removeChild(hijos[i]);
        }
    }
}