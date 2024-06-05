<?php

require '../core/functions.php';
// require '../core/router.php';
require '../config/Database.php';

$config = require('../config/config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "SELECT * FROM posts where id = ?";

// dd($query);

$posts = $db->query($query, [$id])->fetch();

dd($posts);

