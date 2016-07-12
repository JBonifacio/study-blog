<?php

require('database.php');

class newUser extends Connection
{
    function createRecord()
    {
        if(empty($_POST['username']))
        {
            $error = new ErrorHandling();
            $error->SpitError("Username is empty!");
            return false;
        }

        if(empty($_POST['password']))
        {
            $error = new ErrorHandling();
            $error->SpitError("Password is empty!");
            return false;
        }

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(!$this->CheckLoginInDB($username,$password))
        {
            return false;
        }

        session_start();

        $_SESSION[$this->GetLoginSessionVar()] = $username;

        return true;
    }
    function checkIfExists($username,$email)
    {
        
        $query = "
            SELECT *
            FROM public.users usr
            WHERE usr.username = '$username'
            OR usr.email_address = '$email'
        ";
        // echo $query;
        $result = $this->runQuery($query);
        if ($result)
        {
            echo "This account does not exist!";
        }
        else 
        {
            echo "Sorry, the email or username is not currently available.";
        }

    }
}