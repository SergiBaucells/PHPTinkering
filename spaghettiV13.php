<?php

require 'models/Task.php';
require 'bootstrap/bootstrap.php';


$tasks = $query->fetchAll('tasks');


require 'spaghettiV13.view.php';

