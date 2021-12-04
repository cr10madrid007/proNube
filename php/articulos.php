<?php

include('cn.php');

if(isset($_POST['btnGuardar'])){
        try {
            //Variables Post
            $id = $_POST['id'];
            $name = $_POST['nombre'];
            $descripcion = $_POST['desc'];
            $precio = $_POST['precio'];
            $estado = $_POST['estado'];
            $id_bodega = $_POST['id_bodega'];
            $insertar= "INSERT INTO articulos (id, nombre, descripcion, precio, estado, id_bodega) VALUES ('$id','$name', '$descripcion', '$precio', '$estado', '$id_bodega')";
            //$resultado= mysqli_query($conexion, $insertar);
            
            if (mysqli_query($conexion, $insertar)) {
                echo "<script> setTimeout(\"location.href='../articulos.php'\",500) </script>";
                echo "<script> alert('Actualizado exitosamente') </script>";   
               }else {
                echo "<script> setTimeout(\"location.href='../articulos.php'\",500) </script>";
                echo "<script> alert('Error') </script>";      
               }
        
            

            mysqli_close($conexion);
        

            //echo "<script> setTimeout(\"location.href='../articulos.php'\",500) </script>";
           // echo "<script> alert('Guardado exitosamente') </script>";    
        } catch (Exception $e) {
            //echo "<script> alert('Correo no enviado: {$mail->ErrorInfo}') </script>";
            //echo "<script> setTimeout(\"location.href='../index.html'\",1000) </script>";
        }
}

if(isset($_POST['btnEliminar'])){

    $id=$_POST['id'];
   
     

    $sql="DELETE FROM articulos WHERE id='$id'";
    
    
    
    if (mysqli_query($conexion,$sql)) {
        echo "<script> setTimeout(\"location.href='../articulos.php'\",500) </script>";
        echo "<script> alert('Eliminado exitosamente') </script>";   
       }else {
        echo "<script> setTimeout(\"location.href='../articulos.php'\",500) </script>";
        echo "<script> alert('Error') </script>";      
       }


}


if(isset($_POST['btnEditar'])){
    $id = $_POST['id'];
    $name = $_POST['nombre'];
    $descripcion = $_POST['desc'];
    $precio = $_POST['precio'];
    $estado = $_POST['estado'];
    $id_bodega = $_POST['id_bodega'];

    $sql="UPDATE articulos SET nombre='$name', descripcion='$descripcion', precio='$precio', estado='$estado', id_bodega='$id_bodega'  WHERE id= '$id' ";
    
    
    
     
    if (mysqli_query($conexion,$sql)) {
        echo "<script> setTimeout(\"location.href='../articulos.php'\",500) </script>";
        echo "<script> alert('Actualizado exitosamente') </script>";   
       }else {
        echo "<script> setTimeout(\"location.href='../articulos.php'\",500) </script>";
        echo "<script> alert('Error') </script>";      
       }

}


?>