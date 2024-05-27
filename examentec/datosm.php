<center>
<h2 id="id">usuarios</h2>
        <table class="tablas">   
            <tr class="cuerpo"><br> <br> <br> <br>



        
                
                
                <td>id</td>
                <td>nombre</td>
                <td>apellidoP</td>
                <td>apellidoM</td>
                <td>genero/td>
                <td>domicilio</td>
                <td>correo</td>
                <td>telefono</td>
                
                  
                

                
              </tr>
              <?php
                            $sql ="SELECT * FROM usuarios ";
                            $result = mysqli_query($conexion,$sql);
                            
                            while($mostrar = mysqli_fetch_array($result)){
                        ?>
                                <tr style="text-align: center;">
                                    <th scope="row"><?php echo $mostrar['id']?></th>
                                        <td><?php echo $mostrar['nombre']?></td>
                                        <td><?php echo $mostrar['sapellidoP']?></td>
                                        <td><?php echo $mostrar['apellidoM']?></td>   
                                        <td><?php echo $mostrar['genero']?></td>
                                        <td><?php echo $mostrar['domicilio']?></td>   
                                        <td><?php echo $mostrar['correo']?></td> 
                                        <td><?php echo $mostrar['telefono']?></td>                            
                                    </th>
                                </tr>
                                <?php
                            }
            ?>
            <form action="php/usuarios.php" method="post">
        <tr  class="llen">
        
        
      </tr>
    
      </form>
      </table>
    </center>