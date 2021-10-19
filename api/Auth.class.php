<?php

require_once 'DB.class.php';

class Auth extends DB
{
  protected $table_name = "user";

  public static function check_register($data)
  {
    $message = '';
    $sql = "
    SELECT 
      username, email
    FROM 
      {Auth::table_name}
    WHERE
      username = :username OR email = :email
    ";
    $stmt = DB::connect()->prepare($sql);
    $stmt->bindParam(':username', $data['username']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $db_data = $result[0];
    if ($db_data['username'] === $data['username'] && $data['email'] === $data['email']) {
      $message = 'มี username และ email นี้อยู่ในระบบแล้ว';
      return $message;
    } elseif ($db_data['username'] === $data['username']) {
      $message = 'มี username นี้อยู่ในระบบแล้ว';
      return $message;
    } elseif ($db_data['email'] === $data['email']) {
      $message = 'มี email นี้อยู่ในระบบแล้ว';
      return $message;
    } else {
      return true;
    }
  }

  public static function set_register($data)
  {
    if (!empty($data)) {
      $fileds = $placholders = [];
      foreach ($data as $field => $value) {
        $fileds[] = $field;
        $placholders[] = ":{$field}";
      }
    }
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    try {
      DB::connect()->beginTransaction();
      $sql = "INSERT INTO {Auth::table_name} (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placholders) . ")";
      $stmt = DB::connect()->prepare($sql);
      $stmt->execute($data);
      DB::connect()->commit();
      return true;
    } catch (Throwable $e) {
      echo "Insert register Error" . $e->getMessage();
      DB::connect()->rollBack();
    }
  }

  public static function check_login($data)
  {
    $sql = "
    SELECT
      id_user,
      username,
      password,
      role,
      photo
    FROM
      {Auth::table_name}
    WHERE
      username = :username
    ";
    $stmt = DB::connect()->prepare($sql);
    $stmt->bindParam(':username', $data['username']);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $data_result = $result[0];
    if (password_verify($data['password'], $data_result['password'])) {
      $_SESSION['username'] = $data_result['username'];
      $_SESSION['id_user'] = $data_result['id_user'];
      $_SESSION['role'] = $data_result['role'];
      $_SESSION['login'] = "login";
      return $data_result;
    } else {
      return false;
    }
  }
}
