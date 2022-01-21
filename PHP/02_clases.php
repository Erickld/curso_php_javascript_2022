<?php

class vehiculo{
    public $numero_de_llantas;
    private $kilometraje;

    //Esta funcion simpre se manda a llamar cuando instanciamos una clase
    public function __construct(){
        $this->kilometraje = 0;
    }

    public function getKilometraje(){
        return $this->kilometraje;
    }

    private function calcularKilometraje(){
        //Aqui hago uso de la variable de mi clase
        $this->kilometraje = 0;

    }

    protected function setKilometraje($km){

    }

}

$auto = new Vehiculo();
$auto->numero_de_llantas = 4;
echo 'Numero de llantas: '.$auto->numero_de_llantas;
echo '<br/>'; //Etiqueta de salto de linea
echo 'El kilometraje es: '.$auto->getKilometraje().' y soy feliz';



//Creo mi clase auto que hereda de vehiculo

class Auto extends Vehiculo{
    public $marca = 'N/A';
    public $anio = 'N/A';
    public $color = 'N/A';

    function setPropiedades()


}








?>