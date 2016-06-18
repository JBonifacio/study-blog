<?php

class Connection
{
    private $connectionSettings = array(
        "host" => localhost,
        // "port" => ,
        "dbname" => vagrant,
        // "user" => ,
        );
    // private $host   = '127.0.0.1';
    // private $port   = '5432';
    // private $dbname = 'vagrant';
    // private $user   = 'vagrant';
    // private $password = NULL;
    private $connectionString = null;
    private $connection;

    public function __construct()
    {
        $string = NULL;
        foreach ($this->connectionSettings as $arg => $val) {
            if(!empty($val)) {
                $string .= $arg."=".$val." ";
            }
        }
        $this->connectionString = $string;
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