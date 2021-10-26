<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Helper.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_SESSION['login'])) {
  if (isset($_FILES['photo']['tmp_name'])) {
    $folderPath = "../../../assets/image/uploads/";
    $photoName = Helper::uploadPhoto($_FILES['photo'], $folderPath);
    if (!$photoName) {
      $photoName = 'default.png';
    }
    $status = (isset($_POST['status'])) ? 1 : 0;
    $params = [
      'id_category' => (int)Helper::clean($_POST['id_category']),
      'title' => Helper::clean($_POST['title']),
      'detail' => Helper::clean($_POST['detail']),
      'detail2' => $_POST['detail2'],
      'price' => Helper::clean($_POST['price']),
      'stock' => (int)Helper::clean($_POST['stock']),
      'status' => $status,
      'photo' => $photoName
    ];
    if (!empty($params)) {
      $fileds = $placholders = [];
      foreach ($params as $field => $value) {
        $fileds[] = $field;
        $placholders[] = ":{$field}";
      }
    }
    $result = DB::query("INSERT INTO product (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placholders) . ")",$params);
    if ($result) {
      return Response::success($result, 'Save Form Success', 201);
    } else {
      return Response::error('Not found! Save Form Error');
    }
  } else {
    return Response::error('Not Photo upload',400);
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
