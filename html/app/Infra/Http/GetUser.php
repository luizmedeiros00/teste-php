<?php
use App\Infra\Database\MysqlConnection;
use App\Infra\Repository\UserRepository;

$respository = new UserRepository(new MysqlConnection());
$users = $respository->where(['userName' => '123']); 
print_r($users);



