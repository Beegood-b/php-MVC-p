<?php

require '../config/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routesToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}

routesToController($uri, $routes);
