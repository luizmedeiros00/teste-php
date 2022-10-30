<?php
require './vendor/autoload.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '':
  case '/':
  case '/exercicio-1':
    require __DIR__ . '/exercicio-1.php';
    break;
  case '/exercicio-2':
    require __DIR__ . '/exercicio-2.php';
    break;
  case '/exercicio-3':
    require __DIR__ . '/exercicio-3.php';
    break;
  case '/migrations':
    require __DIR__ . '/migrations.php';
    break;
  case '/user-cadastrar':
    require __DIR__ . '/app/Infra/Http/PostUser.php';
    break;
  case '/user-mostrar':
    require __DIR__ . '/app/Infra/Http/GetUser.php';
    break;
  default:
    http_response_code(404);
    require __DIR__ . '/views/404.php';
    break;
}
