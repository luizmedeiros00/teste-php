<?php
require '../../../vendor/autoload.php';

use App\Infra\Database\MysqlConnection;
use App\Infra\Repository\UserRepository;

$params = [
    'name'      => $_POST['name'],
    'userName'  => $_POST['userName'],
    'zipCode'   => $_POST['zipCode'],
    'email'     => $_POST['email'],
    'password'  => $_POST['password']
];

$respository = new UserRepository(new MysqlConnection());
$id = $respository->insert($params); 

echo $id;


// CREATE TABLE teste.`user` (
// 	id INT NOT NULL AUTO_INCREMENT,
// 	name VARCHAR(250) NOT NULL,
// 	userName VARCHAR(250) NOT NULL,
// 	email VARCHAR(250) NOT NULL,
// 	zipCode VARCHAR(250) NOT NULL,
// 	password VARCHAR(250) NOT NULL,
// 	PRIMARY KEY (id)
// )
// ENGINE=InnoDB
// DEFAULT CHARSET=latin1
// COLLATE=latin1_swedish_ci;
