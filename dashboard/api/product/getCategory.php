<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Response.class.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_SESSION['login'])) {
  $query = DB::query('SELECT * FROM category ORDER BY id_category DESC');
  if ($query) {
    return Response::success($query, 'GetCategory Success');
  } else {
    return Response::error('Not found GetCategory Error');
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
