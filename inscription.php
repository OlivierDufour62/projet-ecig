<?php
require_once('core/connect-Db.php');
require_once('core/define.php');
session_start();
if (isset($_POST['email'])) {
    $lastname  = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
    $zip_code = htmlspecialchars($_POST['zip_code']);
    $city = htmlspecialchars($_POST['city']);
    $check = "SELECT * FROM users WHERE email=:email";
    $stmt = $dbh->prepare($check);
    $stmt->execute([':email' => $email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        $pwd = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
        $req = "INSERT INTO users (lastname, firstname, adress, email, zip_code, city, pwd) VALUES ( :lastname, :firstname, :address, :email, :zip_code, :city, :pwd)";
        $statement = $dbh->prepare($req);
        $statement->execute([':lastname' => $lastname, ':firstname' => $firstname, ':address' => $address, ':email' => $email, ':zip_code' => $zip_code, ':city' => $city, ':pwd' => $pwd]);
    } else {


?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
            <link rel="stylesheet" href="./public/assets/css/main.css">
            <link rel="stylesheet" href="./public/assets/css/olivier.css">

            <title>EcigOJ</title>
        </head>

        <body id="corps">

            <?php
            require_once('partial/header.php');
            ?>

            <section>
                <div class="w-100">
                    <form method="POST" class="" action="">
                <?php echo '<div class="mx-auto mx-3 bg-danger w-25 p-2 text-white">Dommage ton mail est déjà enregistrer !!!!!!!<br>
                                <a href="connection.php">Connecte toi et reviens vite !!! </a>
                            </div>';
            }
        }
                ?>
                <div class="modal-body mx-auto mx-3 col-5">
                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text opz"></i>
                        <label data-error="wrong" data-success="right" for="lastname">Nom de Famille</label>
                        <input name="lastname" type="text" id="lastname" class="form-control validate">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text opz"></i>
                        <label data-error="wrong" data-success="right" for="firstname">Prènom</label>
                        <input name="firstname" type="text" id="firstname" class="form-control validate">
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text opz"></i>
                        <label data-error="wrong" data-success="right" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control validate">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text opz"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Mot de passe</label>
                        <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-envelope prefix grey-text opz"></i>
                        <label data-error="wrong" data-success="right" for="address">Adresse</label>
                        <input type="text" name="address" id="address" class="form-control validate">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text opa"></i>
                        <label data-error="wrong" data-success="right" for="city">Ville</label>
                        <input type="text" name="city" id="city" class="form-control validate">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text opa"></i>
                        <label data-error="wrong" data-success="right" for="zip_code">Code Postal</label>
                        <input type="text" name="zip_code" id="zip_code" class="form-control validate">
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <button class="btn bg-dark text-white">Inscrivez vous</button>
                </div>
                    </form>
                </div>
            </section>

            <?php
            require_once('partial/footer.php');
            ?>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js" integrity="sha256-7zqZLiBDNbfN3W/5aEI1OX/5uvck9V0yhwKOA9Oe49M=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
        </body>

        </html>