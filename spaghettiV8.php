<?php

//$task = new Task();
//$task->name = "Comprar llet";
//$task->completed = false;

require 'lib/functions.php';

// PDO -> PHP Data Objects
// Connectar-mos a una base de dades
try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','QZkcNUSiPaYY4e1Z');
}catch (PDOException $e){
    die('Error connecting: '. $e->getMessage() );
}

$statement = $pdo->prepare('SELECT * FROM tasks');

$statement->execute();

//dd($statement->fetchAll());

$result = $statement->fetchAll(PDO::FETCH_OBJ);

$tasks = $result;



//die('OK connecting');

require 'spaghettiV8.view.php';