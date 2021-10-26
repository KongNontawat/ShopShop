<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_SESSION['login'])) {
  $sql = "SELECT 
      p.id_product, 
      p.title,
      p.id_category,
      c.title AS category,
      p.detail,
      p.detail2,
      p.price,
      p.status,
      p.stock,
      p.photo,
      p.created_at
    FROM 
      product AS p
    LEFT JOIN category AS c
    ON p.id_category = c.id_category  WHERE id_product = :id_product
  ";
  $query = DB::query($sql, $_GET);
  if ($query) {
    return Response::success($query[0], 'GetEdit Success');
  } else {
    return Response::error('Not found! Get Error');
  }
} else {
  return Response::error('Method Not Allowed OR And Unauthorized', 405);
}
