// LLAMAMOS A LOS BOTONES
let btnConsultar = document.querySelector("#btnConsultar");
let btnCambiar = document.querySelector("#btnCambiar");
let enlace = document.getElementById("enlace");

// PONEMOS LA FUNCION DEL PRIMER BOTON
btnConsultar.addEventListener("click", function () {
    alert("El enlace va a: " + enlace.href);
})

// FUCION SEGUNDO BOTON
btnCambiar.addEventListener("click", function () {
    enlace.textContent = "Ahora voy a GitHub";
    enlace.href = "https://www.github.com";
    
    alert("El enlace va a: " + enlace.href);
})