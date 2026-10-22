// Guardamos el color de fondo original de la página
var colorOriginal = document.body.style.backgroundColor;

//Guardar las cajas
var div1 = document.getElementById("div1");
var div1 = document.getElementById("div2");
var div1 = document.getElementById("div3");

//Funcion DIV1
div1.onmouseover = function(){
    document.body.style.backgroundColor = "red";
};
div1.onmouseout = function(){
    document.body.style.backgroundColor = colorOriginal;
};

//Funcion DIV2
div2.onmouseover = function(){
    document.body.style.backgroundColor = "aqua";
};
div2.onmouseout = function(){
    document.body.style.backgroundColor = colorOriginal;
};

//Funcion DIV3
div3.onmouseover = function(){
    document.body.style.backgroundColor = "springgreen";
};
div3.onmouseout = function(){
    document.body.style.backgroundColor = colorOriginal;
};