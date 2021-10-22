<?php
header('Content-Type: application/json');
require_once '../Category.class.php';
$Obj = new Category();

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
  $postdata = file_get_contents("php://input");
  $id = json_decode($postdata, true);
  if ($Obj->delete($id)) {
    $response = [
      'status' => true,
      'message' => 'Delete Success'
    ];
    http_response_code(200);
  } else {
    $response = [
      'status' => false,
      'message' => 'Delete Error'
    ];
    http_response_code(402);
  }
} else {
  $response = [
    'status' => false,
    'message' => 'Method Not Allowed'
  ];
  http_response_code(405);
}
echo json_encode($response);
