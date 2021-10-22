<?php
header('Content-Type: application/json');
require_once '../Auth.class.php';
$Auth = new Auth();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['data'])) {
    $response = [];
    $_POST = json_decode($_POST['data'], true);
    if ($_POST[2]['password'] === $_POST[3]['password2']) {
      $data = [
        'username' => $_POST[0]['username'],
        'email' => $_POST[1]['email']
      ];
      $reg_data = [
        'username' => $_POST[0]['username'],
        'email' => $_POST[1]['email'],
        'password' => $_POST[2]['password'],
        'role' => 'user'
      ];
      $result = $Auth->check_register($data);
      if ($result === true) {
        $reg = null;
        $reg = $Auth->set_register($reg_data);
        if ($reg) {
          $user_data = $Auth->get_user($data['username']);
          $response = [
            'status' => true,
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
