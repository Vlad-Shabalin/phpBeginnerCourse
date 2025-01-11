<?php

require 'functions.php';
require 'Database.php';

// Connect to database, and execute a query.
$db = new Database();

$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);