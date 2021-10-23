<?php
header('Content-Type: application/json');
require_once '../Product.class.php';
$Obj = new Product();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if ($_GET['action'] == 'getEdit') {
    $data = $Obj->getEdit('id_product' ,$_GET['id']);
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
