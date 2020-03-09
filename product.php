<?php
require_once('core/connect-Db.php');
session_start();
if (isset($_GET['id'])) {
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
    <section class="container-fluid">
        <div class="row d-flex w-75 justify-content-center bg-white opa-product mx-auto mt-3">
            <?php
            $req = "SELECT * FROM products WHERE id=:id";
            $statement = $dbh->prepare($req);
            $statement->execute([':id' => $_GET['id']]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            extract($result);
            var_dump($result);
            ?>
            <div class="order-1 col-5">
                <div class="mt-2">
                    <h3><?= utf8_encode($name) ?></h3>
                </div>
                <div>

                    <p class="size-text-product"><?= utf8_encode($description) ?></p>
                </div>
            </div>
            <div class="col-4 order-0">

                <img src="<?= $img ?>" class="text-center img-fluid mt-2" alt="">

            </div>
            <div class="order-2 col-3 mt-2">
                <p><?= $prix ?></p>
                <p>Contenance</p>
                <p>Nicotine</p>
                <button class="btn btn-dark text-white">Ajouter au panier</button>
                <a href="modify_product.php?id=<?=$id?>"><button class="btn btn-dark text-white">Modifier le produit</button></a>
            </div>
        </div>
        <div class="w-75 row d-flex mx-auto justify-content-center bg-white opa-product">

            <div class="col-6">
                <h3>Fiche technique</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Marque</th>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <th scope="row">Origine</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">Type de saveur</th>
                            <td>Larry</td>
                        </tr>
                        <tr>
                            <th scope="row">Ratio</th>
                            <td>Larry</td>
                        </tr>
                        <tr>
                            <th scope="row">Composition</th>
                            <td>Larry</td>
                        </tr>
                        <tr>
                            <th scope="row">Type de flacon</th>
                            <td>Larry</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </section>


    <?php
    require_once('partial/footer.php');
    ?>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js" integrity="sha256-7zqZLiBDNbfN3W/5aEI1OX/5uvck9V0yhwKOA9Oe49M=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>