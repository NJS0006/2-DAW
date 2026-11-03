// CAPTURAMOS EL PARRAFO
let miParrafo = document.getElementById("miParrafo");

// AÑADIMOS NUESTRA FUNCION
miParrafo.addEventListener("click", function () {
    if (miParrafo.classList.contains("uno")) {
        miParrafo.classList.remove("uno");
        miParrafo.classList.add("dos");
    }
    else if (miParrafo.classList.contains("dos")) {
        miParrafo.classList.remove("dos");
        miParrafo.classList.add("uno");
    }
})