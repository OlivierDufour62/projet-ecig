<?php

require_once('core/connect-Db.php');
session_start();
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js" integrity="sha256-7zqZLiBDNbfN3W/5aEI1OX/5uvck9V0yhwKOA9Oe49M=" crossorigin="anonymous"></script>
    <title>EcigOJ</title>
</head>

<body>

    <?php
    require_once('partial/header.php');
    ?>
    
    <section id="corps">
        <div class="container-fluid">
            <?php
    $req = "SELECT * FROM products WHERE 1";
    $statement = $dbh->query($req);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo '<div class="row w-75 d-flex m-auto">';
    foreach ($result as $key => $value) {
        echo '<div class="col-xs-6 col-md-4"><div class="cuadro_intro_hover my-2">';
        echo '<img src=' . $value['img'] . ' class="img-responsive w-100" alt="">';
        echo '<div class="caption">
            <div class="blur"><div class="caption-text">';
        echo '<h3 class="mt-3">' . utf8_encode($value['name']) . '</h3>';
        echo '<p>' . substr($value['description'], 0, 5) . '</p>';
        echo '<a class="nav-link" href="product.php?id=' . $value['id'] . '">En savoir plus</a>';
        echo '</div></div></div></div></div>';
    }
    echo '</div></div>';
    ?>
        </div>
    </section>

    <?php
    require_once('partial/footer.php');
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>