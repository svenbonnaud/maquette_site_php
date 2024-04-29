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
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Toshiba</td>
                        <td>M. Toriyama</td>
                        <td>akira-rip@fake.com</td>
                        <td><form action="marque.php"><button class="btn btn-warning" type="submit">Modifier</button></form></td>
                    </tr>
                    <tr>
                        <td>Schneider</td>
                        <td>M. Wolff</td>
                        <td>dwolff@fake.com</td>
                        <td><form action="marque.php"><button class="btn btn-warning" type="submit">Modifier</button></form></td>
                    </tr>
                    <tr>
                        <td>Legrand</td>
                        <td>Mme Ursula</td>
                        <td>ursula-legrand@fake.com</td>
                        <td><form action="marque.php"><button class="btn btn-warning" type="submit">Modifier</button></form></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>