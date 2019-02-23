<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once($_SERVER['DOCUMENT_ROOT'].'/app/repository/hotel.php');

$repo = new HotelRepository();
$result = $repo->get_all();
if($result != null){
 
    // set response code - 200 OK
    http_response_code(200);

    // tell the user
    echo json_encode($result);
}
else{

    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
    echo json_encode($result);
}

?>