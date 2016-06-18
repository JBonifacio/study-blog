<?php

class Connection
{
    private $connectionSettings = array(
        "host" => "localhost",
        "dbname" => "vagrant",
        "user" => "vagrant",
        "password" => "vagrant",
        );
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

    private function connectDB()
    {
        $this->connection = pg_connect($this->connectionString);
        return $this;
    }

    public function getConnectDB()
    {
        echo var_dump($this->connectDB());
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