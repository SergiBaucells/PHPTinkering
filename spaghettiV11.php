<?php

require 'lib/functions.php';
require 'models/Task.php';
require 'services/Connection.php';
require 'services/QueryBuilder.php';


$pdo = Connection::connect(); // Ubicat al fitxer Connection.php

$query = new QueryBuilder($pdo);
$tasks = $query->fetchAll('tasks');


require 'spaghettiV11.view.php';

//class Contractor{
//    protected $pintor;
//    protected $paleta;
//    protected $electricista;
//
//    function __construct($pintor,$paleta,$electricista)
//    {
//        $this->pintor = $pintor;
//        $this->paleta = $paleta;
//        $this->electricista = $electricista;
//    }
//}