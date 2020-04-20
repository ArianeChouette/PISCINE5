<?php
// Si quelqu'un est connecté
  session_start();
// on enleve les
  unset($_SESSION["id"]);
  unset($_SESSION["role"]);
  header("Location: index.php");

 ?>
