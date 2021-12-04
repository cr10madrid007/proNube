<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once 'Database.php';
    include_once 'Bodega.php';

    $database = new Database();
    $db = $database->getConnection();

    $items = new Bodega($db);

    $stmt = $items->getBodegas();
    $itemCount = $stmt->rowCount();


   
    if($itemCount > 0){
        
        $arrayBodegas = array();
        $arrayBodegas["bodega"] = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "nombre" => $nombre,
                "descripcion" => $descripcion,
                "estado" => $estado
            );

            array_push($arrayBodegas["bodega"], $e);
        }
        echo json_encode($arrayBodegas);
    }

    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
    
?>