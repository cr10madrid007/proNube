<?php

include('cn.php');

if(isset($_POST['btnGuardar'])){
        try {
            //Variables Post
            $id = $_POST['id'];
            $name = $_POST['nombre'];
            $descripcion = $_POST['desc'];
            $estado = $_POST['estado'];
            $insertar= "INSERT INTO bodegas (id, nombre, descripcion, estado) VALUES ('$id','$name', '$descripcion', '$estado')";
            //$resultado= mysqli_query($conexion, $insertar);
           
            if (mysqli_query($conexion, $insertar)) {
                echo "<script> setTimeout(\"location.href='../bodega.php'\",500) </script>";
                echo "<script> alert('Actualizado exitosamente') </script>";   
               }else {
                echo "<script> setTimeout(\"location.href='../bodega.php'\",500) </script>";
                echo "<script> alert('Error al Insertar') </script>";      
               }
            
               mysqli_close($conexion);

            // echo "<script> setTimeout(\"location.href='../bodega.php'\",500) </script>";
            // echo "<script> alert('Guardado exitosamente') </script>";    
        } catch (Exception $e) {
            //echo "<script> alert('Correo no enviado: {$mail->ErrorInfo}') </script>";
            //echo "<script> setTimeout(\"location.href='../index.html'\",1000) </script>";
        }
}

if(isset($_POST['btnEliminar'])){

    $id=$_POST['id'];
   
     

    $sql="DELETE FROM bodegas WHERE id='$id'";
    
    
    
    if (mysqli_query($conexion,$sql)) {
        echo "<script> setTimeout(\"location.href='../bodega.php'\",500) </script>";
        echo "<script> alert('Eliminado exitosamente') </script>";   
       }else {
        echo "<script> setTimeout(\"location.href='../bodega.php'\",500) </script>";
        echo "<script> alert('Error') </script>";      
       }


}


if(isset($_POST['btnEditar'])){
    $id = $_POST['id'];
    $name = $_POST['nombre'];
    $descripcion = $_POST['desc'];
    $estado = $_POST['estado'];

    $sql="UPDATE bodegas SET nombre='$name', descripcion='$descripcion', estado='$estado'  WHERE id= '$id' ";
     
    if (mysqli_query($conexion,$sql)) {
        echo "<script> setTimeout(\"location.href='../bodega.php'\",500) </script>";
        echo "<script> alert('Actualizado exitosamente') </script>";   
       }else {
        echo "<script> setTimeout(\"location.href='../bodega.php'\",500) </script>";
        echo "<script> alert('Error') </script>";      
       }

}


?>