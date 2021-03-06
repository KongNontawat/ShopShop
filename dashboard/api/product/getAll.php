<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_SESSION['login'])) {
  if (isset($_GET['page'])) {
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 15;
    $start = ($page - 1) * $limit;
    
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
      product AS p
    LEFT JOIN category AS c
    ON p.id_category = c.id_category
    ORDER BY id_product DESC
    LIMIT {$start},{$limit}";

    $response = DB::query($sql);
    $count = DB::query("SELECT COUNT(*) AS count FROM product");
    return Response::success($response, 'Get All Success', 200 , $count);
  } else {
    return Response::error('Not found! Get Error');
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
