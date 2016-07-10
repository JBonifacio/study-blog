<?php

require('database.php');

class newUser extends Connection
{
    function checkIfExists($username,$email)
    {
        
        $query = "
            SELECT *
            FROM users
            WHERE username = '$username'
            OR email = '$email'
        ";
        echo $query;
        $this->runQuery($query);

    }
}