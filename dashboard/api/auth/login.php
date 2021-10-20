<?php
// header('Content-Type: application/json');
require_once '../Auth.class.php';
$Auth = new Auth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $data = [
      'username' => $_POST['username'],
      'password' => $_POST['password']
    ];
    $result = $Auth->check_login($data);
    if ($result) {
      $user_data = $Auth->get_user($_POST['username']);
      $response = [
        'status' => true,
        'message' => 'login success',
        'data' => $user_data
      ];
      http_response_code(200);
    } else {
      $response = [
        'status' => false,
        'message' => 'ไม่สำเร็จ username หรือ password ไม่ถูกต้อง โปรดลองอีกครั้ง'
      ];
      http_response_code(401);
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
