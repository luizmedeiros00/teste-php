<?php

use App\Infra\Database\MysqlConnection;

$connection = new MysqlConnection();

$stmt = "SELECT CONCAT(usuario.nome, ' - ', info.genero)  as usuario,
          IF(YEAR(CURDATE()) - info.ano_nascimento > 50, 'SIM', 'NÃO') as maior_50_anos
          from usuario usuario
          join info info 
          on usuario.cpf = info.cpf
          where genero = 'M' 
          AND usuario.cpf != '59875804045'
          order by usuario.nome desc";

$result = $connection->select($stmt);

var_dump($result);
