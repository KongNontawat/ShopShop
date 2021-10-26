<?php 

if(!isset($_SESSION['login']) && $_SESSION['role'] !== 'admin') {
  header('location: ../../../pages/home/');
}

?>