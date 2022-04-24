<?php

$config = require 'config.php';

require 'database/DbConnection.php';
require 'database/QueryBuilder.php';


$configuration = $config['database'];

return DbConnection::make(
    $configuration['connection'] . ';dbname=' . $configuration['dbname'],
    $configuration['username'],
    $configuration['password'],
    $configuration['options']
);