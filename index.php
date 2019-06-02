<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

$sql = new Hcode\DB\Sql();

$results = $sql->select("SELECT * FROM tb_users");

echo json_encode($results);

$app->run();

 ?>