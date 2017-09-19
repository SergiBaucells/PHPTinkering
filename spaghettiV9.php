<?php

require 'lib/functions.php';
require 'models/Task.php';

try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','QZkcNUSiPaYY4e1Z');
}catch (PDOException $e){
    die('Error connecting: '. $e->getMessage() );
}

$statement = $pdo->prepare('SELECT * FROM tasks');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');


//$tasks = $result;


require 'spaghettiV9.view.php';