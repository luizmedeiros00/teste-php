<?php

use App\Application\Validation\Validator;
use App\Infra\Database\MysqlConnection;
use App\Infra\Repository\UserRepository;

$params = [
    'name'      => $_POST['name'],
    'userName'  => $_POST['userName'],
    'zipCode'   => $_POST['zipCode'],
    'email'     => $_POST['email'],
    'password'  => $_POST['password']
];

$validatorErrors = Validator::make($params, [
    'name'      => 'required',
    'userName'  => 'required',
    'zipCode'   => 'required|cep',
    'email'     => 'required|email',
    'password'  => 'required|password'
]);

if (count($validatorErrors) > 0) {
    session_start();
    $_SESSION['errors_message'] = $validatorErrors;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$respository = new UserRepository(new MysqlConnection());
$id = $respository->create($params);

echo $id;
