<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = trim($_POST["email"]);
  $password = $_POST["password"];
  $file = "utilisateurs.txt";

  //creation du fichier .txt s'il n'existe encore pas !
  if (!file_exists($file)) {
    file_put_contents($file, "");
  }

  $lignes = file($file, FILE_IGNORE_NEW_LINES);
  foreach ($lignes as $ligne) {
    list($mailEnregistre, ) = explode("|", $ligne);
    if ($email === $mailEnregistre) {
      echo "⚠️ Cet email est déjà inscrit.";
      exit();
    }
  }

  $motdepasseHash = password_hash($password, PASSWORD_DEFAULT);
  file_put_contents($file, $email . "|" . $motdepasseHash . "\n", FILE_APPEND);
  $_SESSION["user"] = $email;

  header("Location: espace_utilisateur.php");
  exit();
}
?>
