// LLAMAMOS A LOS BOTONES
let btnConsultar = document.querySelector("#btnConsultar");
let btnCambiar = document.querySelector("#btnCambiar");

// PONEMOS LA FUNCION DEL PRIMER BOTON
btnConsultar.addEventListener("click", function () {
    let enlace = document.getElementById("enlace");

    alert("El enlace va a: " + enlace.href);
})

// FUCION SEGUNDO BOTON
btnCambiar.addEventListener("click", function () {
    let enlace = document.getElementById("enlace");

    enlace.textContent = "Ahora voy a GitHub";
    enlace.href = "https://www.github.com";


    alert("El enlace va a: " + enlace.href);
})