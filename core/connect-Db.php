<?php
$user = 'root';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=ecig_database', $user);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
