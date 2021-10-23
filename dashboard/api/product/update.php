<?php
session_start();
header('Content-Type: application/json');
require_once '../Product.class.php';
$Obj = new Product();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_POST['id_product'])) {
    $status = (isset($_POST['status'])) ? 1 : 0;
    if (isset($_FILES['photo'])) {
      $photoName = $Obj->uploadPhoto($_FILES['photo']);
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
      unlink('../../../assets/image/uploads/'.$_POST['photo_old']);
    } else {
      $data = [
        'id_category' => $_POST['id_category'],
        'title' => $_POST['title'],
        'detail' => $_POST['detail'],
        'detail2' => $_POST['detail2'],
        'price' => $_POST['price'],
        'stock' => $_POST['stock'],
        'status' => $status
      ];
    }
    $result = $Obj->update($data, $_POST['id_product']);
    if ($result) {
      $response = [
        'status' => true,
        'message' => 'Update form success'
      ];
      http_response_code(200);
    } else {
      $response = [
        'status' => false,
        'message' => 'Update form Error'
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
