<?php


$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];


if (empty($name) || empty($surname) || empty($username) || empty($password) || empty($confirm_password) || empty($gender)) {
 
  echo 'Wszystkie pola są wymagane';
  exit;
}


if ($password != $confirm_password) {

  echo 'Hasła nie są takie same';
  exit;
}


if (strlen($password) < 8) {
  
  echo 'Hasło musi mieć co najmniej 8 znaków';
  exit;
}


if (!preg_match('/[0-9]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password)) {
 
  echo 'Hasło musi zawierać co najmniej jedną cyfrę, małą literę i dużą literę';
  exit;
}


header('Location: dane.php');
exit;