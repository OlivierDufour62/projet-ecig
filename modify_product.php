<?php
require_once('core/connect-Db.php');
session_start();
if(isset($_GET['id'])){
    
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
            $req = "SELECT * FROM products WHERE id=:id";
            $statement = $dbh->prepare($req);
            $statement->execute([':id' => $_GET['id']]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            extract($result);
            var_dump($result);

    ?>
    
    <div class="bg-image"></div>
    <div class="bg-text">
        <div class="container-fluid w-75 bg-text">
            <h1 class="text-center pt-5 mb-5">Proposer un produit</h1>
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="container-fluid">
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <label class="m-0 p-0 m-auto col-4" for="name">Nom</label>
                            <input type="text" class="form-control ml-2 col-8" value="<?=utf8_encode($name)?>" id="name" name="name">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <label class="m-0 p-0 m-auto col-4" for="description">Description</label>
                            <input type="text" class="form-control ml-2 col-8" value="<?=utf8_encode($description)?>" id="description" name="description">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <label class="m-0 p-0 m-auto col-4" for="ref">Référence</label>
                            <input type="text" class="form-control ml-2 col-8" value="<?=$ref?>" id="ref" name="ref">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <label class="m-0 p-0 m-auto col-4" for="prix">Prix</label>
                            <input type="number" class="form-control ml-2 col-8" value="<?=$prix?>" id="prix" name="prix">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex justify-content-center w-75">
                            <span class="col-12 text-center">Vos images</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form-group row">
                        <div class="d-flex row justify-content-center w-75">
                            <label class="col-4 newbtn mr-5">
                                <img id="image1" class="image" class="w-100" src="<?=$img?>">
                                <input id="picture1" name="img1" class="picture" type="file">
                            </label>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="w-25 btn btn-primary text-center mb-3">Modifier</button>
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