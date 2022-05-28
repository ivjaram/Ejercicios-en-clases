<?php 

	class Persona
	{
		//Atributos (Datos)

		public $nombre = "Hans"; 


		//Métodos (Acciones)
		public function hablar($mensaje)
		{
			echo $mensaje;
		}
	}

	//Estamos creando una variable $persona, la cual va ser mi objeto.
	//Con el new es una palabra reservada de php que permite instanciar una clase "Persona" la cual se asigna en la variable creada llamada $persona (mi objeto).
	$persona = new Persona();
	$persona->hablar("Clase de programación orientada a objetos");


?>