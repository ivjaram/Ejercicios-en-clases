<?php

class vehiculo{

    public $marca = "";
    public $modelo = "";
    public $año;
    public $kilometraje;
    
   public function __construct($marca, $modelo, $año, $kilometraje){
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->año = $año;
    $this->kilometraje = $kilometraje;
   }

    public function acelerar($KMH){
        echo "el vehiculo se esta moviendo A ".$KMH." KL/H <br />";
    }

    public function detenerse($TEXT="  "){
        echo "el vehiculo se ah detenido ".$TEXT."<br />";

    }
    public function reversa(){
        echo "el vehiculo esta andando en reversa <br />";

    }
    public function renovar_Vehiculo($marca, $modelo, $año){
        echo "<b>Se ah Renobado Su vehiculo <br />"." Marca: ".$marca." <br />
                                                   Modelo: ".$modelo."<br />
                                                   Año: ".$año."<br /></b>";

    }

    public function __toString(){
        return "<strong> La marca del vehiculo es: </strong> ".$this->marca."<br /> 
                El Modelo es: ".$this->modelo."<br />
                El año es : ".$this->año. "<br />
                El Kilometraje es de: ".$this->kilometraje;        
    }
}
$auto = new vehiculo("Hyundai","Accent","2018","10");
$auto->acelerar(120);
$auto->detenerse("y estacionarse");
$auto->renovar_Vehiculo("Kia","Cerato",2020);
$auto-> __toString();//ERROR Parse error: syntax error, unexpected variable "$auto" in C:\xampp\htdocs\poo\poo.php on line 47

?>