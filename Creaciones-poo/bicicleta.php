<?php
class bicicleta{
    public $marca = "";
    public $modelo= "";
    public $tipo= "";
    public $numPlato;
    public $numPinon;
    


    public function __construct($marca, $modelo, $tipo, $numPlato, $numPinon ){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->numPlato = $numPlato;
        $this->numPinon = $numPinon;
    }
    public function cambiarPlato($nPlato){
        echo "El Plato se ah Cambiado a ".$nPlato."<br />";
    }

    public function CambiarPinon($NPinon){
        echo "El Piñon se ah Cambiado a ".$NPinon."<br />";

    }    
}
$montana = new bicicleta("delivean","hero3","pistera",1,2);
$montana->cambiarPlato(2);
$montana->CambiarPinon(3);
$pistera = new bicicleta("marlean","32","pistera",1,1);
$pistera->cambiarPlato(2);
$pistera->CambiarPinon(4);
?>