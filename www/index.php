<?php
session_start(); 
if (isset($_SESSION['user_email']) && isset($_SESSION['user_name'])) {
    $user_name = $_SESSION['user_name']; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
      <?php include 'navbar.php'; ?>
    </header>
    <main>
        <section class="text-center my-5">
          <h1 class="text-danger">Voici les 2 options qui s'afficheront sur la page d'accueil :</h1>
          <h1>Bonjour merci de vous connecter : <a href="login.php">ici</a></h1>
          <h1 class="text-danger">ou</h1>
          <h1>Bonjour et bienvenue sur le site de gestion de RC-Technic, Michel</h1>
        </section>
    </main>
</body>
</html>