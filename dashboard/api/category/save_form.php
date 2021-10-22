<?php
session_start();
header('Content-Type: application/json');
require_once '../Category.class.php';
$Obj = new Category();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SESSION['login'] == 'login') {
  if (isset($_POST['data'])) {
    $_POST = json_decode($_POST['data'], true);
    if (empty($_POST['id_category'])) {
      if ($Obj->add($_POST)) {
        unset($_POST['id_category']);
        $response = [
          'status' => true,
          'message' => 'Save Form Success'
        ];
        http_response_code(200);
      } else {
        $response = [
          'status' => false,
          'message' => 'Save Form Error'
        ];
        http_response_code(404);
      }
    } else {
      if ($Obj->update($_POST, $_POST['id_category'])) {
        $response = [
          'status' => true,
          'message' => 'Update Form Success'
        ];
        http_response_code(200);
      } else {
        $response = [
          'status' => false,
          'message' => 'Update Form Error'
        ];
        http_response_code(404);
      }
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
