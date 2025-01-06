<?php

require 'functions.php';
// require 'router.php';

// Connect to our MySQL Database.
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=1111111111;charset=utf8mb4";
$pdo = new PDO($dsn);

$statment = $pdo->prepare("select * from posts");
$statment->execute();

$posts = $statment->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}