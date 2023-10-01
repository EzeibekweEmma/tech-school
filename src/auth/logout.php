<?php 
session_start();
if (isset($_SESSION['student_id'])){
  session_destroy();
   header('Location: /');
   exit();
} else {
  header('Location: /');
  exit();
}
?>