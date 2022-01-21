<?php

function saludar(){
    return 'Hola Mundo';
}

function saludaMe($nombre='Francisco'){
    return 'Hola'.$nombre;
}


//llamada de funcion
echo saludar();
echo '<br/>'; //Etiqueta de salto de linea
echo saludaMe('Erick');

?>