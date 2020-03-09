<?php 
require_once('core/connect-Db.php');
$req = "DELETE FROM products WHERE id=:id";
$statement = $dbh->prepare($req);
$statement->execute([':id' => $_GET['id']]);

header('Location: index.php');
