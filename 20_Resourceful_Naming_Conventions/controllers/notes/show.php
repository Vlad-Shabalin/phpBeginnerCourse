<?php

$config = require('config.php');
$db = new Database($config['database'], 'root', 1111111111);

$heading = 'Note';
$currentUserId = 1;

$id = $_GET['id'];

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

autorize($note['user_id'] == $currentUserId);

require "views/notes/show.view.php";