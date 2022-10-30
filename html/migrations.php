<?php
// require '../../../vendor/autoload.php';
use App\Infra\Database\MysqlConnection;

$connection = new MysqlConnection();

$usersTable = "CREATE TABLE IF NOT EXISTS `users` (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(250) NOT NULL,
	userName VARCHAR(250) NOT NULL,
	email VARCHAR(250) NOT NULL,
	zipCode VARCHAR(250) NOT NULL,
	password VARCHAR(250) NOT NULL,
	PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1
COLLATE=latin1_swedish_ci;";

$connection->createTable($usersTable);

$usuariosTable = "CREATE TABLE IF NOT EXISTS `usuario` (
	id INT NOT NULL AUTO_INCREMENT,
	cpf VARCHAR(11) NOT NULL,
	nome VARCHAR(250) NOT NULL,
	PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1
COLLATE=latin1_swedish_ci;";

$connection->createTable($usuariosTable);

$infoTable = "CREATE TABLE IF NOT EXISTS `info` (
	id INT NOT NULL AUTO_INCREMENT,
	cpf VARCHAR(11) NOT NULL,
	genero VARCHAR(1) NOT NULL,
	ano_nascimento INT NOT NULL,
	PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1
COLLATE=latin1_swedish_ci;";

$connection->createTable($infoTable);
// -------- usuarios ---------- //
$connection->insert(
	"insert into usuario (cpf, nome) values (:cpf,:nome)",
	['cpf' => '16798125050', 'nome' => 'Luke Skywalker']
);
$connection->insert(
	"insert into usuario (cpf, nome) values (:cpf,:nome)",
	['cpf' => '59875804045', 'nome' => 'Bruce Wayne']
);
$connection->insert(
	"insert into usuario (cpf, nome) values (:cpf,:nome)",
	['cpf' => '04707649025', 'nome' => 'Diane Prince']
);
$connection->insert(
	"insert into usuario (cpf, nome) values (:cpf,:nome)",
	['cpf' => '21142450040', 'nome' => 'Bruce Banner']
);
$connection->insert(
	"insert into usuario (cpf, nome) values (:cpf,:nome)",
	['cpf' => '83257946074', 'nome' => 'Harley Quinn']
);
$connection->insert(
	"insert into usuario (cpf, nome) values (:cpf,:nome)",
	['cpf' => '07583509025', 'nome' => 'Peter Parker']
);
 // ------ info ---------- //
$connection->insert(
	"insert into info (cpf, genero, ano_nascimento) values (:cpf,:genero,:ano_nascimento)",
	['cpf' => '16798125050', 'genero' => 'M', 'ano_nascimento' => '1976']
);
$connection->insert(
	"insert into info (cpf, genero, ano_nascimento) values (:cpf,:genero,:ano_nascimento)",
	['cpf' => '59875804045', 'genero' => 'M', 'ano_nascimento' => '1960']
);
$connection->insert(
	"insert into info (cpf, genero, ano_nascimento) values (:cpf,:genero,:ano_nascimento)",
	['cpf' => '04707649025', 'genero' => 'F', 'ano_nascimento' => '1988']
);
$connection->insert(
	"insert into info (cpf, genero, ano_nascimento) values (:cpf,:genero,:ano_nascimento)",
	['cpf' => '21142450040', 'genero' => 'M', 'ano_nascimento' => '1954']
);
$connection->insert(
	"insert into info (cpf, genero, ano_nascimento) values (:cpf,:genero,:ano_nascimento)",
	['cpf' => '83257946074', 'genero' => 'F', 'ano_nascimento' => '1970']
);
$connection->insert(
	"insert into info (cpf, genero, ano_nascimento) values (:cpf,:genero,:ano_nascimento)",
	['cpf' => '07583509025', 'genero' => 'M', 'ano_nascimento' => '1972']
);

echo "tables created \n\n";
