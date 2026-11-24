// CAPTURAMOS LOS CAMPOS

// LISTAS GRANDES
let listInicio = document.getElementById("listInicio");
let listProyectos = document.getElementById("listProyectos");
let listPorfolio = document.getElementById("listPorfolio");

// LISTAS PEQUEÑAS
let interLista1 = document.getElementById("interLista1");
let interLista2 = document.getElementById("interLista2");
let interLista3 = document.getElementById("interLista3");

// FUNCIONES

// LISTA INICIO
listInicio.addEventListener("mouseover", function () {
    interLista1.style.visibility = "visible";
    interLista2.style.visibility = "hidden";
    interLista3.style.visibility = "hidden";
})

listInicio.addEventListener("mouseout", function () {
    interLista1.style.visibility = "hidden";
})

// LISTA PROYECTOS
listProyectos.addEventListener("mouseover", function () {
    interLista2.style.visibility = "visible";

    interLista1.style.visibility = "hidden";
    interLista3.style.visibility = "hidden";
})

listProyectos.addEventListener("mouseout", function () {
    interLista2.style.visibility = "hidden";
})

// LISTA PROFOLIO
listPorfolio.addEventListener("mouseover", function () {
    interLista3.style.visibility = "visible";

    interLista1.style.visibility = "hidden";
    interLista2.style.visibility = "hidden";
})

listPorfolio.addEventListener("mouseout", function () {
    interLista3.style.visibility = "hidden";
})