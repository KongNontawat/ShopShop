<?php
header('Content-Type: application/json');
require_once '../Product.class.php';
$Obj = new Product();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if ($_GET['action'] == 'getAll') {
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 15;
    $start = ($page - 1) * $limit;

    $data = $Obj->getAll($start ,$limit);
    $count = $Obj->getCount();
    $response = [
    'status' => true,
    'message' => 'Get Success',
    'data' => $data,
    'count' => $count
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
