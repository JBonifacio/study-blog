<?php

class Connection
{

    private $host   = '127.0.0.1';
    private $port   = '5432';
    private $dbname = 'vagrant';
    private $user   = 'vagrant';
    // private $password = NULL;
    private $connectionString = null;
    private $connection;

    public function __construct()
    {
        $this->connectionString = "host=".$this->host." port=".$this->port." dbname=".$this->dbname." user=".$this->user;
    }

    public function connectDB()
    {
        $this->connection = pg_connect($this->connectionString);

        return $this;
    }

    public function check()
    {
        if (!$this->connection) {
            $error = new ErrorHandling();
            $error->SpitError("Database login failed!  Please contact a website administrator!");

            return false;
        }

        return true;
    }

    public function get()
    {
        return $this->connectionString;
    }
}