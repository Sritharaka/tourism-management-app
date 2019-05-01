<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../../app/repository/user.php');

$data = json_decode(file_get_contents("php://input"));
try {
    $repo = new UserRepository();
    $result = $repo->insert($data->name, $data->email, $data->password);
    if($result != null && $result != false){
    
        // set response code - 201 created
        http_response_code(201);

        // tell the user
        echo json_encode($result);
    }

    // if unable to create the product, tell the user
    else{

        // set response code - 503 service unavailable
        http_response_code(500);

        // tell the user
        echo json_encode(array('message'=>'user creation failed'));
    }
} catch (\Throwable $th) {
    //throw $th;
      // set response code - 503 service unavailable
      http_response_code(500);

      // tell the user
      echo json_encode(array('message'=>'user creation failed'));
}


?>