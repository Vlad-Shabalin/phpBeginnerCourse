<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database'], 'root', 1111111111);

$posts = $db->query("select * from posts")->fetchAll();

dd($posts);