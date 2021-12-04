<?php 
include('php/cn.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Articulos</title>
        <link rel="preload" href="css/normalice.css" as="style">
        <link rel="stylesheet" href="css/normalice.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
        <link rel="preload" href="css/css.css" as="style">
        <link rel="stylesheet" href="css/css.css">
    </head>
    <body>
        <h2>Kardex</h2>
        <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="articulos.php">Articulos</a>
            <a href="bodega.php">Bodega</a>
            <a href="kardex.php">Kardex</a>
            
        </nav>
        </div>
   
    <main class="contenedor sombra">

        <section>
 
            <form action="php/kardex.php"  method="POST" class="formulario" name="enviar">
                <fieldset>
                    
                    <div class="contenedor-campos">
                        <div class="campo"> 
                            <label for="Nombre"></label>
                            <input class="input-text" type="text" placeholder="Id" name="id" id="" required>
                        </div>
                        <div class="campo"> 
                            <label for="Nombre"></label>
                            <input class="input-text" type="text" placeholder="Fecha" name="fecha" id="" >
                        </div>

                        <div class="campo"> 
                            <label for="Mensaje"></label>
                            <textarea class="input-text" placeholder="Descripción" name="desc" id="" cols="30" rows="10" ></textarea>
                        </div>
                        <div class="campo"> 
                            <label for="Nombre"></label>
                            <input class="input-text" type="text" placeholder="Id articulo" name="id_articulo" id="" >
                        </div>
                        <div class="campo"> 
                            <label for="Teléfono"></label>
                            <input class="input-text" type="number" placeholder="Entradas" name="entradas" id="" >
                        </div>
                        <div class="campo"> 
                            <label for="Teléfono"></label>
                            <input class="input-text" type="number" placeholder="Salidas" name="salidas" id="" >
                        </div>
                        <div class="campo"> 
                            <label for="Nombre"></label>
                            <input class="input-text" type="text" placeholder="Precio" name="precio" id="" >
                        </div>
                        <div class="campo"> 
                            <label for="Nombre"></label>
                            <input class="input-text" type="number" placeholder="Saldo" name="saldo" id="" >
                        </div>
                        <div class="campo"> 
                            <label for="Nombre"></label>
                            <input class="input-text" type="number" placeholder="estado" name="estado" id="" >
                        </div>


                        

                        

                        
                        
                        
                        
                    </div> <!--Este es el contenedor de los campos-->
                    <div class="alinear-derecha flex">
                        <input type="submit" value="Guardar" name="btnGuardar" id="" class="boton w-sm-100">
                    
                        <input type="submit" value="Eliminar" name="btnEliminar" id="" class="boton w-sm-100">
                    
                        <input type="submit" value="Editar" name="btnEditar" id="" class="boton w-sm-100">
                    </div>
                    
                </fieldset>
            </form>
        </section>       
        <?php 
  
            $sql="SELECT * FROM kardex";     
        ?>


        <section>
            <div class='contenedor5'>
                <div class='columnas'>ID</div>
                <div class='columnas'>FECHA</div>
                <div class='columnas'>DESCRIP</div>
                <div class='columnas'>ID_ARTICULO</div>
                <div class='columnas'>ENTRADAS</div>
                <div class='columnas'>SALIDAS</div>
                <div class='columnas'>PRECIO</div>
                <div class='columnas'>SALDO</div>
                <div class='columnas'>ESTADO</div>

                
                
                <?php 
                  
                  $resultado = mysqli_query($conexion, $sql); 
                  while($row= mysqli_fetch_assoc($resultado))  { 

                ?> 

                <div class='filas'>  
                    <?php  echo $row['id'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['fecha'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['descripcion'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['id_articulo'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['entradas'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['salidas'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['precio'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['saldo'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['estado'];  ?>   
                </div>
               
               <?php 
                    } 
                ?>
            </div>    
  </section>
    </main>
     
</body>
</html>