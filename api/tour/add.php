<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once($_SERVER['DOCUMENT_ROOT'].'/app/repository/tour.php');

$data = json_decode(file_get_contents("php://input"));

$repo = new TourRepository();
$result = $repo->add_tour($data->name, $data->price, $data->image, $data->details, $data->destination, $data->tourType);
if($result != null){
 
    // set response code - 201 created
    http_response_code(201);

    // tell the user
    echo json_encode($result);
}

// if unable to create the product, tell the user
else{

    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
    echo json_encode($result);
}

?>