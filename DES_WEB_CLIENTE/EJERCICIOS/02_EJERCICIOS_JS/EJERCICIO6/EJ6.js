// 1. Seleccionamos todos los botones que tienen la clase .btn-color
let botones = document.querySelectorAll("button");

// 2. Recorremos la lista de botones uno a uno
botones.forEach(function(boton) {
    
    // 3. A cada botón le añadimos un "escuchador" de eventos de tipo click
    boton.addEventListener("click", function() {
        
        // 4. Obtenemos el valor que hay dentro del atributo 'value' del botón pulsado
        let colorElegido = boton.value;
        
        // 5. Cambiamos el color de fondo del body de la página con ese valor
        document.body.style.backgroundColor = colorElegido;
        
    });
});