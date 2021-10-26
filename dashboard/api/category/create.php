<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Helper.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_SESSION['login'])) {
  if (isset($_POST)) {
    $params = [
      'title' => Helper::clean($_POST['title']),
      'detail' => Helper::clean($_POST['detail'])
    ];
    if (!empty($params)) {
      $fileds = $placholders = [];
      foreach ($params as $field => $value) {
        $fileds[] = $field;
        $placholders[] = ":{$field}";
      }
    }
    $result = DB::query("INSERT INTO category (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placholders) . ")",$params);
    if ($result) {
      return Response::success($result, 'Create Success', 201);
    } else {
      return Response::error('Not found! Create Error');
    }
  } else {
    return Response::error('Bad Request',400);
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
