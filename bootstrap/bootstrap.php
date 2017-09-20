<?php

require 'lib/functions.php';
require 'services/Connection.php';
require 'services/QueryBuilder.php';


$pdo = Connection::connect();
$query = new QueryBuilder($pdo);
