<?php

require '../core/functions.php';
require '../core/router.php';
require '../config/Database.php';

$config = require('../config/config.php');

$db = new Database($config['database']);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

// dd($posts);

