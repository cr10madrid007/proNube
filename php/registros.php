<?php 
include('../php/cn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preload" href="../css/css.css" as="style">
    <link rel="stylesheet" href="../css/css.css">

    <link rel="preload" href="../css/bootstrap.min.css" as="style">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Examen III Parcial</title>
</head>
<body>

        <h1 class="h1">Examen III Parcial -- Registros</h1>
        



        <section class="contenedorEnlances">
            <a class="btn btn-primary " href="pais.php">Pais</a>
            <div></div>
            <a class="btn btn-primary " href="ciudad.php">Ciudad</a>
            <div></div>
            <a class="btn btn-info " href="registros.php">Registro Poblacional</a>
            <div></div>
            <a class="btn btn-primary " href="graficos.php"> Estadisticas </a>
        </section>


        
        <section class="sectionForm">
            <form role="form" action="../php/accionRegistro.php" method="POST">
                <legend>Ingrese el Registro</legend>
                
                    
                    <div class="form-group">
                    <label for="email">Ingrese  La Ciudad:</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id">
                            <option disabled selected>-- Seleccionar La Ciudad--</option>
                            <?php
                                $consulta="SELECT * FROM tciudad";
                                $ej=mysqli_query($conexion, $consulta);
                            ?>
                            <?php foreach($ej as $rs):  ?>
                                <option value="<?php echo $rs['idCiudad'] ?>"><?php echo $rs['ciudad'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Ingrese Cantidad De Hombres:</label>
                        <input type="text" name="m" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Ingrese Cantidad De Mujeres:</label>
                        <input type="text" name="f" class="form-control" id="email">
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-primary" name="btnGuardar">     
            </form>
        </section>

        <section class="sectionForm">
            <form role="form" action="../php/accionRegistro.php" method="POST">
                <legend>Ingrese Los datos del Registro que Actualizará</legend>
                    <div class="form-group">
                        <label for="email">Ingrese ID del Registro:</label>
                        <input type="text" name="id" class="form-control" id="email">
                    </div>
                    
                    <div class="form-group">
                    <label for="email">Ingrese  La Ciudad:</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="idCiudad">
                            <option disabled selected>-- Seleccionar La Ciudad--</option>
                            <?php
                                $consulta="SELECT * FROM tciudad";
                                $ej=mysqli_query($conexion, $consulta);
                            ?>
                            <?php foreach($ej as $rs):  ?>
                                <option value="<?php echo $rs['idCiudad'] ?>"><?php echo $rs['ciudad'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Ingrese Cantidad De Hombres:</label>
                        <input type="text" name="m" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Ingrese Cantidad De Mujeres:</label>
                        <input type="text" name="f" class="form-control" id="email">
                    </div>

                    <input type="submit" value="Actualizar" class="btn btn-success" name="btnActualizar">     
            </form>
        </section>


        <section class="sectionForm">
            <form role="form" action="../php/accionRegistro.php" method="POST">
                <legend>Ingrese el Registro que Eliminará</legend>
                    <div class="form-group">
                        <label for="email">Ingrese ID del Registro:</label>
                        <input type="text" name="id" class="form-control" id="email">
                    </div>
                    <input type="submit" value="Eliminar" class="btn btn-danger" name="btnEliminar">     
            </form>
        </section>


        <?php 
  
            $sql="SELECT * FROM tregistros";

            

        ?>
  <section>
            <div class='contenedor3'>
                <div class='columnas'>ID Registro</div>
                <div class='columnas'>idCiudad</div>
                <div class='columnas'>Total de Hombres</div>
                <div class='columnas'>Total de Mujeres</div>
                
                <?php 
                  
                  $resultado = mysqli_query($conexion, $sql); 
                  while($row= mysqli_fetch_assoc($resultado))  { 

                ?> 

                <div class='filas'>  
                    <?php  echo $row['idRegistros'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['idCiudad'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['tHombres'];  ?>   
                </div>
                <div class='filas'>  
                    <?php  echo $row['tMujeres'];  ?>   
                </div>
               
               <?php 
                    } 
                ?>
            </div>    
  </section>

</body>
</html>