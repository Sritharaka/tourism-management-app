<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once '../../app/repository/booking.php';

$data = json_decode(file_get_contents("php://input"));
try {
    $repo = new BookingRepository();
    $result = $repo->add($data->user_id, $data->hotel_id, $data->package_id, $data->tour_id);
    if ($result != null) {
        http_response_code(201);
        echo json_encode($result);
    }

// if unable to create the product, tell the user
    else {
        http_response_code(500);
        echo json_encode($result);
    }

} catch (\Throwable $th) {
    http_response_code(500);
    echo json_encode($th);
}
