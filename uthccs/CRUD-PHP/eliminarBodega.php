<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once 'Database.php';
    include_once 'Bodega.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    $item = new Bodega($db);

    if(isset($_GET["id"]) && isset($_GET["estado"])){
        $item->id = $_GET["id"];
        $item->estado = $_GET["estado"];
    }

    if($item->deleteBodega()){
        echo "Bodega ha sido eliminada.";
    } else{
        echo "Bodega no ha sido eliminada";
    }
?>