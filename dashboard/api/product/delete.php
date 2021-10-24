<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && !empty($_SESSION['login'])) {
  parse_str(file_get_contents("php://input"), $_DELETE);
  $params = array('id_product' => $_DELETE['id_product']);
  $sql = "DELETE FROM product WHERE id_product = :id_product";
  $query = DB::query($sql, $params);
  if ($query) {
    return Response::success($query, 'Delete Success');
  } else {
    return Response::error('Delete Fail', 400);
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
