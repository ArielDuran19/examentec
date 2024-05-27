<?php
include'php/conexion.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>GYM RYZEN</title>
    <link rel="shortcut icon" href="./images/pesa.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

</head>
<body>

       <header class="hero">
            <nav class="nav container">
                <div class="nav__logo">
                    <h2 class="nav__title">GYM RYZEN</h2>
                </div>
 
                  <ul class="nav__link nav__link--menu">
                   <li class="nav__items">
                    <a href="index.html" class="nav__links">Inicio</a> 
                </li>
                <li class="nav__items">
                    <a href="servicios.php" class="nav__links">Servicios</a>
                </li>
                <li class="nav__items">
                    <a href="datos.php" class="nav__links">Registro</a>
                </li>
           
           <form action="php/usuarios.php" method="post">
           <tr>        
           <td><input type="text" name="nombre" id="nombre" placeholder="ingrese su nombre"></td>
           <td><input type="text" name="apellidoP" id="apellidoP" placeholder="ingrese su Apellido Paterno"></td>
           <td><input type="text" name="apellidoM" id="apellidoM" placeholder="ingrese su Apellido Materno"></td>
           <td><select id="genero" name="genero">
           <option value="hombre">Hombre</option>
           <option value="mujer">Mujer</option>
           </select></td>
           <td><input type="text" name="domicilio" id="domicilio" placeholder="ingrese su Domicilio"></td>
           <td><input type="text" name="correo" id="correo" placeholder="ingrese su Correo Electronico"></td>
           <td><input type="text" name="telefono" id="telefono" placeholder="ingrese su Telefono"></td>
           <td><input type = "submit" name="btnAgregar" value="Agregar"> </input> </td>
           </tr>
</form>
       </main>


     <script src="./js/slider.js"></script>






</body>
</html>
