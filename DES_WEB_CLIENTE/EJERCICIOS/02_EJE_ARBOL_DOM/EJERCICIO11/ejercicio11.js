// CAPTURAMOS LOS ELEMENTOS 
// EN ESTE CASO SOLO LOS DOS PRIMEROS DIV
let dv1 = document.getElementById("div1");
let dv2 = document.getElementById("div2");

// CREAMOS LAS FUNCIONES
dv1.onmouseover = function () {
    dv2.style.visibility = "visible";
}

dv1.onmouseout = function () {
    dv2.style.visibility = "hidden";
}

// JUEGUITO 
dv2.onmouseover = function () {
    dv2.style.visibility = "visible";
}