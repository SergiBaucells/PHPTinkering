<?php

/**
 * Class Connection
 */


class Connection{

    public static function connect($config){
        try{

//            return new PDO(
//                'mysql:host=127.0.0.1;dbname=prova',
//                'debian-sys-maint',
//                'QZkcNUSiPaYY4e1Z');

            $connectionString = $config['database']['driver'] . ':' .
                $config['database']['host'] . ';' .
                $config['database']['name'] . ',' .
                $config['database']['name'] . ',' .
                $config['database']['password'];

        }catch (PDOException $e){
            die('Error connecting: ' . $e->getMessage() );
        }
    }
}