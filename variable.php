<!DOCTYPE html>
<html lang="en">
<head>

    <title>Creacion de variables</title>
</head>
<body>
    <!-- Creamos una variable del tipo text-->
    <?php
    // la variable se tiene que realizar con el signo $
    $nombre = 'ivan jara';
    //llamado a la variable con 
    echo '<b>'.$nombre.'</b><br>';

 //crear 2 variables
    $num1 = 2;
    echo $num1.'<br />';
    $num2 = 2;
    echo $num2.'<br />';
    $resul = $num1+$num2;
    echo "La suma de :".$resul;

    // condicion if
    if($num1==$num2)
    {
        echo "<br></br>ambos son iguales";
    }
    else{
            if($num1>$num2)
            {
            echo "<br></br> el numero ".$num1." es mayor que el ".$num2;
            }
             else 
                    {
                echo "<br></br> el numero ".$num2." es mayor que el ".$num1;
                    }

    }    

    for ($i=0; $i < 9; $i++) { 
        # code...
    }
    while ($a <= 10) {
        # code...
    }
    do while ($a <= 10) {
        # code...
    }
?>

</body>
</html>