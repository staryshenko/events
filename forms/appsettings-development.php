<?php
  $hostname = "localhost";
  $username = "evgen";
  $password = "totalwar1_S";
  $dbname = "events";
  try {
      $conn = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $username, $password, array(
      PDO::ATTR_PERSISTENT => true
      ));
  } catch (Exception $e) {
    die("Не вдалось підключитися до бази даних: " . $e->getMessage());
  }
?>