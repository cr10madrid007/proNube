<?php

include('cn.php');

if(isset($_POST['btnGuardar'])){
        try {
            //Variables Post
            $id = $_POST['id'];
            $fecha = $_POST['fecha'];
            $descripcion = $_POST['desc'];
            $id_articulo = $_POST['id_articulo'];
            $entradas = $_POST['entradas'];
            $salidas = $_POST['salidas'];
            $precio = $_POST['precio'];
            $saldo = $_POST['saldo'];
            $estado = $_POST['estado'];

            $insertar= "INSERT INTO kardex (id, fecha, descripcion, id_articulo, entradas, salidas, precio, saldo, estado) VALUES ('$id','$fecha','$descripcion','$id_articulo','$entradas','$salidas','$precio','$saldo','$estado')";
            //$resultado= mysqli_query($conexion, $insertar);
           
            if (mysqli_query($conexion, $insertar)) {
                echo "<script> setTimeout(\"location.href='../kardex.php'\",500) </script>";
                echo "<script> alert('Actualizado exitosamente') </script>";   
               }else {
                echo "<script> setTimeout(\"location.href='../kardex.php'\",500) </script>";
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
   
     

    $sql="DELETE FROM kardex WHERE id='$id'";
    
    
    
    if (mysqli_query($conexion,$sql)) {
        echo "<script> setTimeout(\"location.href='../kardex.php'\",500) </script>";
        echo "<script> alert('Eliminado exitosamente') </script>";   
       }else {
        echo "<script> setTimeout(\"location.href='../kardex.php'\",500) </script>";
        echo "<script> alert('Error') </script>";      
       }


}


if(isset($_POST['btnEditar'])){
            $id = $_POST['id'];
            $fecha = $_POST['fecha'];
            $descripcion = $_POST['desc'];
            $id_articulo = $_POST['id_articulo'];
            $entradas = $_POST['entradas'];
            $salidas = $_POST['salidas'];
            $precio = $_POST['precio'];
            $saldo = $_POST['saldo'];
            $estado = $_POST['estado'];

    $sql="UPDATE kardex SET fecha='$fecha', descripcion='$descripcion', id_articulo='$id_articulo', entradas='$entradas', salidas='$salidas', precio='$precio', saldo='$saldo', estado='$estado'  WHERE id= '$id' ";
    
     
    if (mysqli_query($conexion,$sql)) {
        echo "<script> setTimeout(\"location.href='../kardex.php'\",500) </script>";
        echo "<script> alert('Actualizado exitosamente') </script>";   
       }else {
        echo "<script> setTimeout(\"location.href='../kardex.php'\",500) </script>";
        echo "<script> alert('Error') </script>";      
       }

}


?>