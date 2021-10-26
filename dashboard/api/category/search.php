<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_SESSION['login'])) {
  $params = [
    'search' => $_GET['search'] . "%"
  ];
  $query = DB::query("SELECT * FROM category WHERE title LIKE :search ORDER BY id_category DESC", $params);
  if (!empty($query)) {
    return Response::success($query, 'Search Success');
  } else {
    return Response::error('Not found! Search Error');
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
