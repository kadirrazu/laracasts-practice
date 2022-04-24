<?php

$db = require 'bootstrap.php';


$query = new QueryBuilder($db);

$result = $query->selectAll('todo');

require 'index.view.php';