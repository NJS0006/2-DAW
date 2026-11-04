// 1. Capturamos todos los enlaces de la página y el div flotante
let enlaces = document.querySelectorAll("a");
let popup = document.getElementById("infoPopup");

// 2. Recorremos cada enlace para añadirles los escuchadores de eventos
enlaces.forEach(function(enlace) {
    
    // Al colocar el ratón encima del enlace (mouseover)
    enlace.addEventListener("mouseover", function() {
        // Obtenemos la URL exacta del enlace actual (apartado b)
        let urlEnlace = enlace.href;

        // Modificamos el contenido del div con la URL
        popup.textContent = "La URL de este enlace es: " + urlEnlace;

        // Mostramos el div cambiándolo a bloque
        popup.style.display = "block";
    });

    // Al retirar el ratón del enlace (mouseout)
    enlace.addEventListener("mouseout", function() {
        // Volvemos a ocultar el div
        popup.style.display = "none";
    });

});