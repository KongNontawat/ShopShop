<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_SESSION['login'])) {
  $query = DB::query("SELECT * FROM category WHERE id_category = :id_category", $_GET);
  if ($query) {
    return Response::success($query[0], 'GetEdit Success');
  } else {
    return Response::error('Not found! Get Error');
  }
} else {
  return Response::error('Method Not Allowed OR And Unauthorized', 405);
}
