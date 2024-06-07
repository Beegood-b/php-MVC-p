<?php

$config = require('../config/config.php');
$db = new Database($config['database']);

$title = $heading = 'My Notes';

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->fetchAll();

require '../app/views/notes.view.php';