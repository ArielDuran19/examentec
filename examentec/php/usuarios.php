<?php
include("conexion.php"); 
$id = $_POST['id']; //obtener datos de formulario
$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$genero = $_POST['genero'];
$domicilio = $_POST['domicilio'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

if(isset($_POST['btnAgregar'])){
    $consulta="INSERT INTO usuarios(id,nombre,apellidoP.apellidoM,genero,domicilio,corrreo,telefono) 
    VALUE('$id','$nombre','$apellidoP','$apellidoM','$genero','$domicilio','$correo','$telefono')";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        echo'<script type="text/javascript">
        alert("Dato ingresado Correctamente");

        window.location.href=":/datos.php";
        mysqly_close($conexion); </script>';
    }

    else{
        echo'<script type="text/javascript">
        alert("Error dato Incorrecto");

        window.location.href=":/datos.php"';
    }

}
     else{
        if(isset($_POST['btnModificar'])){
        $consulta="UPDATE usuarios set nombre = '$nombre', set apellidoP = '$apellidoP', set apellidoM = '$apellidoM', set genero = '$genero', set domicilio = '$domicilio', set correo = '$correo', set telefono= '$telefono'
        where(id='$id')";
        $resultado=mysqli_query($conexion,$consulta);
        
        mysqli_close($conexion);

        }

        if($resultado){
            echo'<script type="text/javascript">
            alert("Dato ingresado Correctamente");
    
            window.location.href=":/datosM.php";
            mysqly_close($conexion); </script>';
        }
    
        else{
            echo'<script type="text/javascript">
            alert("Error dato Incorrecto");
    
            window.location.href=":/datosM.php"';
        }


     }

     else{
        if(isset($_POST['btnEliminar'])){
            $consulta="DELETE FROM usuarios where (id='$id')";
            $resultado=mysqli_query($conexion,$consulta);
            mysqli_close($conexion);

        }
        if($resultado){
            echo'<script type="text/javascript">
            alert("Dato Eliminado Correctamente");
    
            window.location.href=":/datosM.php";
            mysqly_close($conexion); </script>';
        }
    
        else{
            echo'<script type="text/javascript">
            alert("Error dato no Encontrado");
    
            window.location.href=":/datosM.php"';
        }

     }

     ?>