<?php
require_once '../config/config.php';
require_once '../classes/db.php';
require_once '../classes/User.php';

header('Content-Type: application/json');

$request_method = $_SERVER["REQUEST_METHOD"];
$user = new User();

switch ($request_method) {
  case 'GET':
    if (isset($_GET['id'])) {
      $data = $user->getUser($_GET['id']);
      if ($data) {
        echo json_encode($data);
      } else {
        echo null;
      }
    } else {
      $data = $user->showUsers();
      echo json_encode($data);
    }
    break;
  default:
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode(['error' => 'Method Not Allowed']);
    break;
}
