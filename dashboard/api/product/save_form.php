<?php
session_start();
header('Content-Type: application/json');
require_once '../Product.class.php';
$Obj = new Product();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['photo']['tmp_name'])) {
    $photoName = $Obj->uploadPhoto($_FILES['photo']);
    if (!$photoName) {
      $photoName = 'default.png';
    }
    $status = (isset($_POST['status'])) ? 1 : 0;
    $data = [
      'id_category' => $_POST['id_category'],
      'title' => $_POST['title'],
      'detail' => $_POST['detail'],
      'detail2' => $_POST['detail2'],
      'price' => $_POST['price'],
      'stock' => $_POST['stock'],
      'status' => $status,
      'photo' => $photoName
    ];
    $result = $Obj->add($data);
    if ($result) {
      $response = [
        'status' => true,
        'message' => 'Add form success'
      ];
      http_response_code(200);
    } else {
      $response = [
        'status' => false,
        'message' => 'Add form Error'
      ];
      http_response_code(400);
    }
  }
} else {
  $response = [
    'status' => false,
    'message' => 'Method Not Allowed'
  ];
  http_response_code(405);
}
echo json_encode($response);
