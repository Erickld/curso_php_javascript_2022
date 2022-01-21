//var mivariable = 'Rojo'; //ya no se usa
let mivariable = 'Rojo';
let comillas = ` ` //alt+96
let boton = true; //verdadero
let boton2 = false; //negativo
const Pi = 3.1416;
console.log(Pi);

for (let i = 0; i<10; i++) {
    console.log("Expediente"+i);
}

let j=0;
while (j<10) {
    console.log(`Ciclo ${j}`)
    j++;
}

//JSON 
const manzana = {
    color: 'rojo',
    marca: 'appleRed',
    distribucion:{
        pais: 'Estados UNIDOS',
        telefono: '557766223'
    }
}

console.log('\n'+manzana.distribucion.telefono)

let sum = (a,b) =>{
    let result = a+b;
    return(result);
}

console.log(sum(1,2));