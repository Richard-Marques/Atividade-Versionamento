<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  if ($username === "admin" && $password === "senha123") {
    header("Location: success.php");
    exit();
  } else {
    echo "Credenciais inválidas. Tente novamente.";
  }
}
?>