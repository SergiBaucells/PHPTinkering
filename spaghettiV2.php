<?php

$user = htmlspecialchars($_GET['user']);

require 'spaghettiV2.view.php';

//http://localhost:8000/spaghettiV2.php?user=Sergi
//
//function hola($user){
//    echo htmlspecialchars($user);
//}
//
//hola('Sergi');