<?php
if (isset($_SESSION['user_email']) && isset($_SESSION['user_name'])) {
  $user_email = $_SESSION['user_email'];
  $user_name = $_SESSION['user_name'];
?>
<nav class="navbar navbar-expand-lg bg-primary-subtle">
          <img src="bdd.jpg" alt="" width="100">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">RC-Technic</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="liste_materiels.php">Matériels</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="liste_marques.php">Marques</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="materiel.php">Créer un matériel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="marque.php">Créer une marque</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Créer un profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Connexion</a>
                  </li>
                
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Déconnexion</a>
                  </li> 
                   <li class="nav-item">
                        <a class="nav-link">Bonjour, <?php echo $user_name; ?></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<?php
        } else {
?>
  <nav class="navbar navbar-expand-lg bg-primary-subtle">
          <img src="bdd.jpg" alt="" width="100">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">RC-Technic</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="liste_materiels.php">Matériels</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="liste_marques.php">Marques</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="materiel.php">Créer un matériel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="marque.php">Créer une marque</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Créer un profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Connexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Déconnexion</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<?php
}
?>