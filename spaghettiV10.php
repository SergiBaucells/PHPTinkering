<?php

require 'lib/functions.php';
require 'models/Task.php';


$pdo = connect(); //La funció està a l'archiu functions.php

$tasks = fetchAllTasks($pdo); //La funció està a l'archiu functions.php


require 'spaghettiV10.view.php';