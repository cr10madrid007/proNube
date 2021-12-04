<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once 'Database.php';
    include_once 'kardex.php';

    $database = new Database();
    $db = $database->getConnection();

    $items = new kardex($db);

    $stmt = $items->getkardexs();
    $itemCount = $stmt->rowCount();


   
    if($itemCount > 0){
        
        $arrayKardex = array();
        $arrayKardex["kardex"] = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "fecha" => $fecha,
                "descripcion" => $descripcion,
                "ID_articulo" => $ID_articulo,
                "entradas" => $entradas,
                "salidas" => $salidas,
                "precio" => $precio,
                "saldo" => $saldo,
                "estado" => $estado
            );

            array_push($arrayKardex["kardex"], $e);
        }
        echo json_encode($arrayKardex);
    }

    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
    
?>