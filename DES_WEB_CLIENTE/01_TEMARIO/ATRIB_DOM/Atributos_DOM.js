
//APARTADO A
function apartadoA(){
    let dedo = document.getElementById("miTabla");

    let nuevaAltura = prompt("Dame la nueva altura de la tabla (px)");
    let nuevaAnchura = prompt("Dame la nueva altura de la tabla (px)");

    //setAtribute
    dedo.setAttribute("width", nuevaAnchura);
    dedo.setAttribute("width", nuevaAltura);
}

//APARTADO B
function apartadoB(){
    let dedo = document.getElementById("miTabla");

    let nuevoValorBorde = prompt("Dame un nuevo valor para el borde de la tabla");

    let bordeActual = parseInt(dedo.getAttribute("border"));

    let sumaBordes = bordeActual + nuevoValorBorde

    //setAtribute
    dedo.setAttribute("border", sumaBordes);
}

//APARTADO C
function apartadoC(){
    let dedo = document.getElementById("miTabla");

    let alineacionActual = dedo.getAttribute("align");

    if(alineacionActual === "center"){
        dedo.setAttribute("align", "left");
    }
    else if(alineacionActual === "left"){
        dedo.setAttribute("align", "right");
    }
    else if(alineacionActual === "right") {
        dedo.setAttribute("align", "center");
    }
}