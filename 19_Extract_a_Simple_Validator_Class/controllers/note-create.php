<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database'], 'root', 1111111111);

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (! Validator::string($_POST['body'], 1, 10000)) {
        $errors['body'] = 'A body of no more than 10,000 chatacters is required.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require 'views/note-create.view.php';