<?php
header('Content-Type: application/json');
require_once '../DB.class.php';
require_once '../Helper.class.php';
require_once '../Response.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_SESSION['login'])) {

  if (isset($_POST['id_product'])) {
    $status = (isset($_POST['status'])) ? 1 : 0;
    
    if (isset($_FILES['photo'])) {
      $folderPath = "../../../assets/image/uploads/";
      $photoName = Helper::uploadPhoto($_FILES['photo'], $folderPath);
      if(!$photoName) {
        return Response::error('Update Photo Fail',400);
      }
      if (!empty($_POST['photo_old'])) {
        unlink('../../../assets/image/uploads/' . $_POST['photo_old']);
      }
    } else {
      $photoName = $_POST['photo_old'];
    }
    $params = [
      'id_category' => (int)$_POST['id_category'],
      'title' => Helper::clean($_POST['title']),
      'detail' => Helper::clean($_POST['detail']),
      'detail2' => Helper::clean($_POST['detail2']),
      'price' => Helper::clean($_POST['price']),
      'stock' => (int)Helper::clean($_POST['stock']),
      'status' => $status,
      'photo' => $photoName,
      'id_product' => (int)$_POST['id_product']
    ];
    
    $result = DB::query("UPDATE product SET 
    id_category = :id_category,
    title = :title,
    detail = :detail,
    detail2 = :detail2,
    price = :price,
    stock = :stock,
    status = :status,
    photo = :photo
    WHERE id_product = :id_product", $params);

    return Response::success($result, 'Update Success');
  } else {
    return Response::error('Error!! Bad Request#', 400);
  }
} else {
  return Response::error('Method Not Allowed OR Unauthorized', 405);
}
