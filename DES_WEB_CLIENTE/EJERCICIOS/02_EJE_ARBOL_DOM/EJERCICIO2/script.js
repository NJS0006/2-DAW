// PILLAMOS VALOR DE LA TABLA
let tabla = document.getElementById("tabla");

// CONECTAMOS LOS BOTONES
let btnDimensiones = document.getElementById("btnDimensiones");
let btnBorde = document.getElementById("btnBorde");
let btnAlineacion = document.getElementById("btnAlineacion");

// FUNCION BOTON1
btnDimensiones.addEventListener("click", function () {

    let estilos = window.getComputedStyle(tabla);

    // SACER CUALES HAY
    let altoTabla = estilos.height;
    let anchoTabla = estilos.width;

    alert("Ancho de la tabla: " + anchoTabla + "\nAlto de la tabla: " + altoTabla);

    // PEDIDA DE LOS NUEVOS DATOS
    let pedidaNuevoAlto = prompt("Dime un nuevo alto para la tabla");
    let pedidaNuevoAncho = prompt("Dime un nuevo ancho para la tabla");

    // APLICACION NUEVOS DATOS
    tabla.style.height = pedidaNuevoAlto;
    tabla.style.width = pedidaNuevoAncho;

    alert("El nuevo ancho de la tabla: " + pedidaNuevoAncho + "\n El nuevo alto de la tabla: " + pedidaNuevoAlto);
})


// FUNCION BOTON2
btnBorde.addEventListener("click", function () {

    let estilos = window.getComputedStyle(tabla);

    // SACER CUALES HAY
    let estiloBorde = estilos.border;

    alert("El borde de la tabla tiene: " + estiloBorde);

    // PEDIDA DE LOS NUEVOS DATOS
    let pedidaNuevoBorde = prompt("Dime un nuevo borde para la tabla");

    // APLICACION NUEVOS DATOS
    tabla.style.border = pedidaNuevoBorde;

    alert("El nuevo borde de la tabla: " + pedidaNuevoBorde);
})


// FUNCION BOTON3
btnAlineacion.addEventListener("click", function () {

    let estilos = window.getComputedStyle(tabla);

    // SABER CUALES HAY
    let alineacion = estilos.textAlign;

    alert("tabla tiene una alineacion: " + alineacion);

    // PEDIDA DE LOS NUEVOS DATOS
    let pedidaNuevaAli = prompt("Dime una nueva alineacion para la tabla");

    // APLICACION NUEVOS DATOS
    tabla.style.textAlign = pedidaNuevaAli;

    alert("la nueva alineacion de la tabla es: " + pedidaNuevaAli);
})