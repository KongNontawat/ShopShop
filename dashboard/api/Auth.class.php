<?php
session_start();
require_once 'DB.class.php';

class Auth extends DB
{
  protected $table_name = "user";

  public function check_register($data)
  {
    error_reporting(0);
    $message = '';
    $sql = "
    SELECT 
      username, email
    FROM 
      user
    WHERE
      username = :username OR email = :email
    ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindParam(':username', $data['username']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $db_data = $result[0];
    if ($db_data['username'] === $data['username'] && $db_data['email'] === $data['email']) {
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

  public function set_register($data)
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
      $sql = "INSERT INTO user (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placholders) . ")";
      $stmt = DB::connect()->prepare($sql);
      $stmt->execute($data);
      return true;
    } catch (Throwable $e) {
      echo "Insert register Error" . $e->getMessage();
      return false;
    }
  }

  public function check_login($data)
  {
    error_reporting(0);
    $sql = "
    SELECT
      id_user,
      username,
      password,
      role,
      photo
    FROM
      user
    WHERE
      username = :username
    ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindParam(':username', $data['username']);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $data_result = $result[0];
    if (password_verify($data['password'], $data_result['password'])) {
      $_SESSION['username'] = $data_result['username'];
      $_SESSION['id_user'] = $data_result['id_user'];
      $_SESSION['role'] = $data_result['role'];
      $_SESSION['login'] = "login";
      return true;
    } else {
      return false;
    }
  }

  public function get_user($data)
  {
    $message = '';
    $sql = "
    SELECT 
      id_user,
      username,
      role,
      photo
    FROM 
      user
    WHERE
      username = :username
    ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindParam(':username', $data);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
  }
}
