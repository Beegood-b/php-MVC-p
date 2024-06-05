<?php

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function abort()
{
  http_response_code($code = 404);

  require "views/{$code}.php";

  die();
}

function urlIs($value) {
  return $_SERVER['REQUEST_URI'] === $value;
};
