<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Helper.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $params = [
    'username' => Helper::clean($_POST['username'])
  ];

  $result_query = DB::query("SELECT id_user, username, password, role, photo FROM user WHERE username = :username", $params);
  if (isset($result_query[0]['password'])) {
    if (password_verify($_POST['password'], $result_query[0]['password'])) {
      $_SESSION['id_user'] = $result_query[0]['id_user'];
      $_SESSION['username'] = $result_query[0]['username'];
      $_SESSION['photo'] = $result_query[0]['photo'];
      $_SESSION['role'] = $result_query[0]['role'];
      $_SESSION['login'] = "login";
      unset($result_query[0]['password']);
      return Response::success($result_query[0], 'Login Success');
    } else {
      return Response::error('Check Password Fail! Login Error');
    }
  } else {
    return Response::error('ไม่สำเร็จ username หรือ password ไม่ถูกต้อง โปรดลองอีกครั้ง', 401);
  }
} else {
  return Response::error('Method Not Allowed', 405);
}
