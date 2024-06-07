<?php

$config = require('../config/config.php');
$db = new Database($config['database']);

$title = $heading = 'Note';

$note = $db->query("SELECT * FROM notes WHERE user_id = :id", ['id' => $_GET['id']])->fetch();

require '../app/views/notes.view.php';