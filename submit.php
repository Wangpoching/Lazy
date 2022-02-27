<?php
  require_once('conn.php');

  $nickname = $_POST['nickname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $referrer = $_POST['referrer'];
  $options = $_POST['options'];
  $others = $_POST['others'];
  $sql = sprintf(
  "INSERT INTO `boching_form_responses` (`nickname`, `email`, `phone`, `referrer`, `options`, `others`) VALUES ('%s', '%s', '%s', '%s', %d, '%s')",
    $nickname,
    $email,
    $phone,
    $referrer,
    $options,
    $others);

  $result = $conn->query($sql);
  if (!$result) {
  die('failed.' . $conn->error);
  }

  header("Location:./index.php?status=1");
?>