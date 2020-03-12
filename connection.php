<?php

//echo password_hash("020988", PASSWORD_DEFAULT);

require_once('core/connect-Db.php');
require_once('core/define.php');
// if (!isset($_GET['id'])) {
// }


if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $pwd = htmlspecialchars($_POST['password']);
    $statement = $dbh->prepare('SELECT * FROM users WHERE email=:email');
    $statement->execute([':email' => $email]);
    $result2 = $statement->fetch(PDO::FETCH_ASSOC);
    var_dump($result2);
    if (count($result2) > 0) {
        //Retourne true si le mot de passe en clair est bien le mot de passe haché
        if(password_verify($pwd, $result2['pwd']))
        {
            session_start();
            $_SESSION['id'] = $result2['id'];
            $_SESSION['email'] = $result2['email'];
            header('Location: espace.php');
        
        } 
    } else {
        echo "Email ou Mot de passe invalide";
    }
}

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
                <div class="modal-body mx-auto mx-3 col-5">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text opz"></i>
                        <label data-error="wrong" data-success="right" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control validate">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text opz"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                        <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn bg-dark text-white">Connectez vous</button>
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