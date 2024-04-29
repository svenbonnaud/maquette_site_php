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
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $password = $_POST["password"];
    $access = $_POST["access"];
    
    if ($access == 1) {
        $error_message = "Vous n'avez pas les droits pour créer un compte avec un accès de niveau 1.";
    }
    if (!preg_match("/^[a-zA-Z]*$/", $nom) || !preg_match("/^[a-zA-Z]*$/", $prenom)) {
        die("Le nom et le prénom ne doivent contenir que des lettres.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("L'adresse email n'est pas valide.");
    }
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,20}$/", $password)) {
        die("Le mot de passe doit contenir au moins 1 minuscule, 1 majuscule, 1 chiffre, pas de caracteres spéciaux et avoir une longueur entre 8 et 20 caractères.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "rc_bdd";

    $conn = new mysqli($servername, $username, $password_db, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql_check = "SELECT * FROM user WHERE email = '$email'";
    $result_check = $conn->query($sql_check);
    if ($result_check->num_rows > 0) {
        die(" l'email existe déjà.");
    }

    $sql_insert = "INSERT INTO user (email, nom, prenom, password, access) VALUES ('$email', '$nom', '$prenom', '$hashed_password', $access)";
    if ($conn->query($sql_insert) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

    <main>
    <?php if(isset($error_message)): ?>
        <?php endif; ?>
        <form class="w-75 mx-auto my-5 border p-2" action="" method="post">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="email" name="email" placeholder="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="nom" name="nom" placeholder="votrenom">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Prénom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="prenom" name="prenom" placeholder="votreprénom">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="hashed_password" name="password">
                </div>
            </div><select class="form-select" aria-label="Default select example" name="access">
                <option selected>Rôle</option>
                <option value="1">ouvrier</option>
                <option value="2">gestionnaire</option>
                <option value="3">administrateur</option>
            </select>
            <button class="btn btn-secondary mt-3">Valider</button>
        </form>
        
    </main>
</body>
</html>
