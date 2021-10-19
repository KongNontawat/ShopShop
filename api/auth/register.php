<?php
// header('Content-Type: application/json');
require_once '../Auth.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  print_r($_POST);
  http_response_code(200);
} else {
  $response = [
    'status' => false,
    'message' => 'Method Not Allowed'
  ];
  http_response_code(405);
  echo json_encode($response);
}
