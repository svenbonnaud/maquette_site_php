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
            <table class="table">
                <thead>
                    <th>Nom</th>
                    <th>Référence</th>
                    <th>Marque</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Interrupteur</td>
                        <td>RX678</td>
                        <td>Legrand</td>
                        <td>4.50</td>
                        <td>12</td>
                        <td><form action="materiel.php"><button class="btn btn-warning" type="submit">Modifier</button></form></td>
                    </tr>
                    <tr>
                        <td>Connecteur</td>
                        <td>RX468</td>
                        <td>Legrand</td>
                        <td>1.60</td>
                        <td>35</td>
                        <td><form action="materiel.php"><button class="btn btn-warning" type="submit">Modifier</button></form></td>
                    </tr>
                    <tr>
                        <td>Cable 10m</td>
                        <td>CB764</td>
                        <td>Schneider</td>
                        <td>14.50</td>
                        <td>2</td>
                        <td><form action="materiel.php"><button class="btn btn-warning" type="submit">Modifier</button></form></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>