//declaracion de arreglos.
var autos = ["Chevrolet", "Ford", "BMW", "Nissan"];

var dato = document.getElementById ("datos");
var mod = document.getElementById ("modificaciones");

dato.innerHTML="<h1>"+autos.join(" * ")+"</h1>";
 //Extrae un elemento del arreglo
autos.pop();// Adios un Nissan
// Insertar un elemento al final del arreglo
autos.push("Subaru"); //Bienvenida a subaru
autos.push("Cadillac"); //Bienvenida a cadillac
// Extrae el primer elemento del arreglo
autos.shift() // Adios un chevrolet
// Inserta un elemento al principio del arreglo
autos.unshift("Volkswagen") //Bienvenido volkswagen
autos.sort();
// Recorrer un arreglo y mostrar los elementos
var txt = "";
autos.forEach(mostrarArreglo);
mod.innerHTML=txt;
function mostrarArreglo(value){
    txt = txt +"<li>" +value+"</li>" + "<br>";
}
/*Objetos en Java Script*/
/* Objetos en JavaScript */
var persona1 = {
    nombre: "Hector",
    apellido: "Bautista",
    edad: "2..",
    telefono: "489-126-8028",
    nombreCompleto: function(){
        return this.nombre + " " + this.apellido;
    }
}
persona1.apellido = "Mtz.";
function Persona(nombre,apellido,edad){
    this.nombre = nombre,
    this.apellido = apellido,
    this.edad = edad
}
//Abuelo
var abuelo = new Persona("Juan","Odilon",78);
var abuela = new Persona("Maria","Mtz.",75);

var datosPersona = document.getElementById("datosPersona");
datosPersona.innerHTML="Mi abuelo se llama "+abuelo.nombre
+" y mi abuela se llama "+abuela.nombre;

