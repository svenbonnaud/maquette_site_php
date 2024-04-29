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
        <form class="w-75 mx-auto my-5 border p-2" action="" method="post">
            <select class="form-select" aria-label="Default select example">
              <option selected>Marque</option>
              <option value="1">Schneider</option>
              <option value="2">Legrand</option>
              <option value="3">Toshiba</option>
            </select>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="staticEmail" placeholder="Interrupteur">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Référence</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="staticEmail" placeholder="RX1385">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Quantité</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control-plaintext" id="staticEmail" placeholder=10>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Prix d'achat</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control-plaintext" id="staticEmail" placeholder=2.30>
                </div>
            </div>
            <button class="btn btn-secondary mt-3">Valider</button>
        </form>
    </main>
</body>
</html>
