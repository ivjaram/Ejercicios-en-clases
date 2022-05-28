<?php
    if(isset($_POST["enviar_btn_post"]))
    {
        echo "los Datos enviados por el metodo get son los siguientes: <br /> su Nombre es: ".$_POST["nombre_txt"]."<br /> su password es:"
        .$_POST["password_txt"]."<br /> su Rut es:".$_POST["rut_txt"]."<br /> Su ciudad es: ".$_POST["ciudad_txt"]."<br />Su Direccion es. 
        ".$_POST["direccion_txt"];

    }
    else if(isset($_GET["enviar_btn_get"]))
    {
        echo "los Datos enviados por el metodo get son los siguientes: <br /> su Nombre es: ".$_GET["nombre_txx"]."<br /> su password es:"
        .$_GET["password_txx"]."<br /> su Rut es:".$_GET["rut_txx"]."<br /> Su ciudad es: ".$_GET["ciudad_txx"]."<br />Su Direccion es. 
        ".$_GET["direccion_txx"];

    }
?>