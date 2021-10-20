<?php
header('Content-Type: application/json');
require_once '../Category.class.php';
$Obj = new Category();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if ($_GET['action'] == 'getCategory') {
    $data = $Obj->getCategory('id_category' ,$_GET['id']);
    $response = [
    'status' => true,
    'message' => 'Get Success',
    'data' => $data
  ];
  }
} else {
  $response = [
    'status' => false,
    'message' => 'Method Not Allowed'
  ];
  http_response_code(405);
}
echo json_encode($response);
