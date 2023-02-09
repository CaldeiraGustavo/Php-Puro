<?php
require 'vendor/autoload.php';

use Database\Connector;
use Dotenv\Dotenv;

$dotenv = DotEnv::createImmutable('/var/www');
$dotenv->load();

$dbConnection = (new Connector())->getConnection();