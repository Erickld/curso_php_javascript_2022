document.getElementById("enviar").onclick=()=>{
    let opcion = document.getElementById("opcion").value;
    let divImagenes = document.getElementById("imagenes");

    divImagenes.innerHTML = "";

    for (let i=0; i<opcion; i++) {
        let imagenVisual = document.createElement("img");
        imagenVisual.src = "./img/bird.jpg"
        divImagenes.append(imagenVisual)
    }

}