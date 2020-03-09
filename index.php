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
            <div class="row w-75 d-flex m-auto">
                <div class="col-xs-6 col-md-4">
                    <div class="cuadro_intro_hover my-2">
                        <img src="./public/assets/img/frenchdude.jpg" class="img-responsive w-100" alt="">
                        <div class="caption">
                            <div class="blur">
                                <div class="caption-text">
                                    <h3 class="mt-3">French Dude</h3>
                                    <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                    <a class="nav-link" href="product.php">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="cuadro_intro_hover my-2">
                        <img src="./public/assets/img/cinema.jpg" class="img-responsive w-100" alt="">
                        <div class="caption">
                            <div class="blur">
                                <div class="caption-text">
                                    <h3 class="mt-3">Cinema</h3>
                                    <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                    <a class="nav-link" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="cuadro_intro_hover my-2">
                        <img src="./public/assets/img/cookiecream.jpg" class="img-responsive w-100" alt="">
                        <div class="caption">
                            <div class="blur">
                                <div class="caption-text">
                                    <h3 class="mt-3">Cookie Cream</h3>
                                    <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                    <a class="nav-link" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row w-75 d-flex m-auto">
                <div class="col-xs-6 col-md-4">
                    <div class="cuadro_intro_hover my-2">
                        <img src="./public/assets/img/fullmoon.jpg" class="img-responsive w-100" alt="">
                        <div class="caption">
                            <div class="blur">
                                <div class="caption-text">
                                    <h3 class="mt-3">Full Moon</h3>
                                    <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                    <a class="nav-link" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="cuadro_intro_hover my-2">
                        <img src="./public/assets/img/ony.jpg" class="img-responsive w-100" alt="">
                        <div class="caption">
                            <div class="blur">
                                <div class="caption-text">
                                    <h3 class="mt-3">Ony</h3>
                                    <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                    <a class="nav-link" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="cuadro_intro_hover my-2">
                        <img src="./public/assets/img/frenchdude.jpg" class="img-responsive w-100" alt="">
                        <div class="caption">
                            <div class="blur">
                                <div class="caption-text">
                                    <h3 class="mt-3">French Dude</h3>
                                    <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                    <a class="nav-link" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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