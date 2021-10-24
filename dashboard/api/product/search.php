<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_SESSION['login'])) {
  $params = [
    'search' => $_GET['search'] . "%"
  ];
  $sql = "SELECT 
      p.id_product, 
      p.title,
      p.id_category,
      c.title as category,
      p.detail,
      p.detail2,
      p.price,
      p.status,
      p.stock,
      p.photo,
      p.created_at
    FROM 
      product as p
    LEFT JOIN category as c
    ON p.id_category = c.id_category
    WHERE p.title LIKE :search
    ORDER BY id_product DESC";
  $query = DB::query($sql, $params);
  if (!empty($query)) {
    return Response::success($query, 'Search Success');
  } else {
    return Response::error('Not found! Search Error');
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
