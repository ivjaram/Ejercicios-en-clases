<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Formulario</title>
    <meta charset="utf-8">

</head>
<body>

<hgroup><h1>Metodo post</h1>

    <form name= "evia-post_frm" action="recibe.php" method="post" enctype="application/x-www-form-urlencoded">

        <label>Ingrese su Usuario:</label>
        <input type="text" name="nombre_txt">
        <br></br>

        <label>ingrese su contraseña:</label> 
        <input type="password" name="password_txt"> 
        <br></br>

        <label>ingrese su rut:</label>
        <input type="text" name="rut_txt">
        <br></br>

        <label>ingrese su Ciudad:</label>
        <input type="text" name="ciudad_txt">
        <br><br>

        <label>ingrese Direccion</label>
        <input type="text" name="direccion_txt">
        <br></br>

        <input type="submit" name="enviar_btn_post" value="enviar por post">

    </form>
</hgroup>

<hgroup><h1>Metodo get</h1>

    <form name= "evia-get_frm" action="recibe.php" method="get" enctype="application/x-www-form-urlencoded">

        <label>Ingrese su Usuario:</label>
        <input type="text" name="nombre_txx">
        <br></br>

        <label>ingrese su contraseña:</label> 
        <input type="password" name="password_txx"> 
        <br></br>

        <label>ingrese su rut:</label>
        <input type="text" name="rut_txx">
        <br></br>

        <label>ingrese su Ciudad:</label>
        <input type="text" name="ciudad_txx">
        <br><br>

        <label>ingrese Direccion</label>
        <input type="text" name="direccion_txx">
        <br></br>

        <input type="submit" name="enviar_btn_get" value="enviar por get">

    </form>
</hgroup>
</body>
</html>

