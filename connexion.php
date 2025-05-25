<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = trim($_POST["email"]);
  $password = $_POST["password"];
  $file = "utilisateurs.txt";

  if (!file_exists($file)) {
    echo "Aucun utilisateur enregistré.";
    exit();
  }

  $lignes = file($file, FILE_IGNORE_NEW_LINES);
  foreach ($lignes as $ligne) {
    list($mailEnregistre, $hash) = explode("|", $ligne);
    if ($email === $mailEnregistre && password_verify($password, $hash)) {
      $_SESSION["user"] = $email;
      header("Location: espace_utilisateur.php");
      exit();
    }
  }

  echo "Identifiants incorrects.";
}
?>
