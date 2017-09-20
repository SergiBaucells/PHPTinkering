<?php

require 'models/Task.php';

require 'bootstrap/bootstrap.php';


$tasks = $query->fetchAll('tasks');


require 'spaghettiV12.view.php';

