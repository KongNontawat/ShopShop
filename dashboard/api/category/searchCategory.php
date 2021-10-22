<?php
header('Content-Type: application/json');
require_once '../Category.class.php';
$Obj = new Category();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $data = $Obj->search($_GET['search']."%");
  if (!empty($data)) {
    $response = [
      'status' => true,
      'message' => 'Search Success',
      'data' => $data
    ];
    http_response_code(200);
  } else {
    $response = [
      'status' => false,
      'message' => 'Search Error'
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
