<?php

/**
 *
 * Class QueryBuilder
 *
 */

class QueryBuilder
{
    protected $pdo;

    public function construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function fetchAll($table){
        $statement = $this->pdo->prepare("SELECT * FROM $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }

    /*
     * TODO .
     *
     * @param $table
     * @param $filters
     */
    public function where( $table, $filters)
    {

    }

}