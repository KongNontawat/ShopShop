<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Helper.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_POST['password'] === $_POST['password2']) {
    $result_query = [];
    $params_check_register = [
      'username' => Helper::clean($_POST['username']),
      'email' => Helper::clean($_POST['email'])
    ];
    $result_query = DB::query("SELECT username, email FROM user WHERE username = :username OR email = :email", $params_check_register);
    if (!empty($result_query[0])) {
      if ($result_query[0]['username'] == $_POST['username'] && $result_query[0]['email'] == $_POST['email']) {
        return Response::error('username และ email นี้มีอยู่ในระบบแล้ว โปรดลองอีกครั้ง', 400);
      } elseif ($result_query[0]['username'] == $_POST['username']) {
        return Response::error('username นี้มีอยู่ในระบบแล้ว โปรดลองอีกครั้ง', 400);
      } elseif ($result_query[0]['email'] == $_POST['email']) {
        return Response::error('Email นี้มีอยู่ในระบบแล้ว โปรดลองอีกครั้ง', 400);
      }
    } else {
      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $params_register = [
        'username' => Helper::clean($_POST['username']),
        'email' => Helper::clean($_POST['email']),
        'password' => Helper::clean($_POST['password']),
        'role' => 'user'
      ];
      $fileds = $placholders = [];
      foreach ($params_register as $field => $value) {
        $fileds[] = $field;
        $placholders[] = ":{$field}";
      }
      $crated = DB::query("INSERT INTO user (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placholders) . ")", $params_register);
      if ($crated) {
        $query = DB::query("SELECT id_user, username, photo, role  FROM user WHERE username = :username AND email = :email", $params_check_register);
        $_SESSION['id_user'] = $query[0]['id_user'];
        $_SESSION['username'] = $query[0]['username'];
        $_SESSION['photo'] = $query[0]['photo'];
        $_SESSION['role'] = $query[0]['role'];
        $_SESSION['login'] = "login";
        return Response::success($query[0], 'Register Success', 201);
      } else {
        return Response::error('Not found! Register Error');
      }
    }
  } else {
    return Response::error('password และ confirm password ไม่ตรงกัน โปรดลองอีกครั้ง', 400);
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
