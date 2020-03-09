<?php
require_once('core/connect-Db.php');
session_start();
if (isset($_POST['name'])) {
    $name = utf8_encode(htmlspecialchars($_POST['name']));
    $ref = utf8_encode(htmlspecialchars($_POST['ref']));
    $desc = utf8_encode(htmlspecialchars($_POST['description']));
    $price = utf8_encode(htmlspecialchars($_POST['price']));
    $img = utf8_encode(htmlspecialchars($_POST['img']));
    $insert = "INSERT INTO products(name, ref, description, img, prix) VALUES (:name,:ref,:description,:img,:prix)";
    $stmt = $dbh->prepare($insert);
    $stmt->execute([':name' => $name, ':ref' => $ref, ':description' => $desc, ':img' => $img, ':prix' => $price]);
    
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js" integrity="sha256-7zqZLiBDNbfN3W/5aEI1OX/5uvck9V0yhwKOA9Oe49M=" crossorigin="anonymous"></script>
    <title>EcigOJ</title>
</head>

<body>

    <?php
    require_once('partial/header.php');
    ?>

    <div class="bg-image"></div>
    <div class="bg-text">
        <div class="container-fluid w-75 bg-text">
            <h1 class="text-center pt-5 mb-5">Proposer un produit</h1>
            <form method="POST" class="needs-validation">
                <div class="container-fluid">
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <label class="m-0 p-0 m-auto col-4" for="name">Nom du produit:</label>
                            <input type="text" class="form-control ml-2 col-8" id="name" placeholder="Nom du produit" name="name" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <label class="m-0 p-0 m-auto col-4" for="description">Description:</label>
                            <input type="text" class="form-control ml-2 col-8" id="description" placeholder="Description" name="description" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <label class="m-0 p-0 m-auto col-4" for="price">Prix:</label>
                            <input type="number" class="form-control ml-2 col-8" id="price" placeholder="Prix" name="price" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <label class="m-0 p-0 m-auto col-4" for="ref">Référence</label>
                            <input type="text" class="form-control ml-2 col-8" id="ref" placeholder="Référence" name="ref" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <span class="col-12 text-center">Vos images:</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <label class="newbtn mr-5">
                                <img id="image" src="./public/assets/img/upload.png">
                                <input id="picture" name="img" type="file">
                            </label>
                            <label class="newbtn mr-5">
                                <img id="image" src="./public/assets/img/upload.png">
                                <input id="picture" type="file">
                            </label>
                            <label class="newbtn">
                                <img id="image" src="./public/assets/img/upload.png">
                                <input id="picture" type="file">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="w-25 btn btn-primary text-center mb-3">Proposer</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    require_once('partial/footer.php');
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="./public/assets/js/main.js"></script>
</body>

</html>