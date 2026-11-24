//Coecion de tipos en JS

/*Comportamiendo de lenguajes de programacion convirtiendo el valor de una variable de un tipo a otro, Al ser un lenguaje interpretado, y no tener compilador, lo hace automatico y sin avisar. */

//Implicita (automatica)

let num = 42;
let string = "2";

//---------------//
//Operaciones Arig//

let suma = num + string;
let rest = num - string;
let mult = num * string;
let divs = num / string;

console.log(suma);
console.log(typeof(suma));

console.log(rest);
console.log(typeof(rest));

console.log(mult);
console.log(typeof(mult));

console.log(divs);
console.log(typeof(divs));

//---------------//
//Operaciones Log// 

let igual = (0 == "0");
let igual2 = (0 === "0");

console.log(igual);
console.log(typeof(igual));

console.log(igual2);
console.log(typeof(igual2));

//---------------//
//Operaciones Booleanos//

let num2 = 42;
let boo = true;

let ej = num2 + boo;

console.log(ej);
console.log(typeof(ej));

//---------------//

//Explicita (casteo [forzar como programador])

let ej_expl = 45;
let ej_expl2 = true;

let res = "cadena";

console.log(String(ej_expl));
console.log(typeof(res));

//String()
//Number()
//Boolean()