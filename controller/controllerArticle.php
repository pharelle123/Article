
<?php

require_once './Model/bdd.php';
 class Model{

 static function article(){
    global $pdo;
    $articles = $pdo->query("SELECT * FROM articles");
    return $articles->fetchAll();
    }
 }
 $articles = Model::article();