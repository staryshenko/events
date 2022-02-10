<?php
  $hostname = "localhost";
  $username = "";
  $password = "";
  $dbname = "";
  try {
      $conn = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $username, $password, array(
      PDO::ATTR_PERSISTENT => true
      ));
  } catch (Exception $e) {
    die("Не вдалось підключитися до бази даних: " . $e->getMessage());
  }
?>