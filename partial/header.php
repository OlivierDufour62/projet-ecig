<div class="container-fluid">
    <header class="row bg-header">
        <div class="container-fluid top-header">
            <section class="col-12 d-flex justify-content-around navbar-expand-lg w-100">
                <div class="col-4 h-100 w-100 m-auto d-flex">
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Recherche" aria-label="Search">
                        <div class="input-group-append">
                            <button class="input-group-text" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 row">
                    <div class="col-4 d-flex justify-content-center">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </div>
                    <?php
                    if (!isset($_SESSION['id'])) {
                        echo '<div class="col-4 d-flex justify-content-center">
                        <a class="nav-link" href="connection.php">Connexion</a>
                    </div>';
                    } else {
                        echo '<div class="col-4 d-flex justify-content-center">
                        <a class="nav-link" href="deconnection.php">Déconnexion</a>
                        </div>';
                    }
                    ?>
                    <div class="col-4 d-flex justify-content-center">
                        <a class="nav-link" href="<?php if (isset($_SESSION['id'])) {
                                                        echo "espace.php?id=" . $_SESSION['id'];
                                                    } else {
                                                        echo 'connection.php';
                                                    } ?>">Mon Compte</a>
                    </div>

                </div>
            </section>
        </div>
        <div class="w-75 mx-auto">
            <nav class="fill col-12 d-flex justify-content-between navbar-expand-lg w-100">
                <ul class="navbar-nav w-100">
                    <li class="nav-item active col-3 d-flex justify-content-center m-auto">
                        <a class="w-100 h-100 d-flex justify-content-center" href="index.php">Acheter</a>
                    </li>
                    <div class="col-6 d-flex justify-content-center">
                        <img src="./public/assets/img/logocolorreverse.png" alt="">
                    </div>
                    <li class="nav-item col-3 d-flex justify-content-center m-auto">
                        <a class="w-100 h-100 d-flex justify-content-center" href="propose-prod.php">Proposer un produit</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</div>