<?php
// header('Content-Type: application/json');
require_once '../Auth.class.php';
$Auth = new Auth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST) && !empty($_POST['username'])) {
    if ($_POST['password'] === $_POST['password2']) {
      $data = [
        'username' => $_POST['username'],
        'email' => $_POST['email']
      ];
      // exit();
      $reg_data = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'role' => 'user'
      ];
      $result = $Auth->check_register($data);
      if ($result === true) {
        $reg = null;
        $reg = $Auth->set_register($reg_data);
        if ($reg) {
          $user_data = $Auth->get_user($_POST['username']);
          $response = [
            'status' => false,
            'message' => 'Register Success',
            'data' => $user_data
          ];
          http_response_code(200);
        } else {
          $response = [
            'status' => false,
            'message' => 'Register ผิดพลาด โปรดลองใหม่ในภายหลัง'
          ];
          http_response_code(401);
        }
      } else {
        $response = [
          'status' => false,
          'message' => $result
        ];
        http_response_code(401);
      }
    } else {
      $response = [
        'status' => false,
        'message' => 'password และ confirm password ไม่ตรงกัน โปรดตรวจสอบและลองอีกครั้ง'
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
