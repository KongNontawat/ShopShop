<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Helper.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_SESSION['login'])) {

  if (isset($_POST)) {
    $params = [
      'id_category' => (int)$_POST['id_category'],
      'title' => Helper::clean($_POST['title']),
      'detail' => Helper::clean($_POST['detail']),
    ];

    $result = DB::query("UPDATE category SET 
    title = :title,
    detail = :detail
    WHERE id_category = :id_category", $params);

    return Response::success($result, 'Update Success');
  } else {
    return Response::error('Error!! Bad Request#', 400);
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
