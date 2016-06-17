<?php

require('database.php');
require('ErrorHandling.php');

$db = new Connection();
if(!$db->connectDB())
{
    $error = new ErrorHandling();
    $error->SpitError("Database login failed!  Please contact a website administrator!");
    return false;
}
?>