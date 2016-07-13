<!DOCTYPE html>
<?php
    // Class that handles errors.
    require('ErrorHandling.php');
    // Class with database functions.
    require('database.php');
    
    $test = new Connection();
?>

<html>
<head>
    <h1>DB Connection Test Page</h1>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <p> 
        This page will test your connection and see if all is well.
    </p>
    <h2>Connection Settings</h2>
    <p>
        <?php
            echo $test->getConnectionString();
        ?>
    </p>
    <h2>Debugging Info</h2>
    <p>
        <button type="button" onclick="document.getElementById('demo').style.display='block'">Click to show debug info.</button>
    </p>
    <p class="debug" id="demo" style="display:none">
            <?php
            $test->getConnectDB();
        ?>
    </p>
    <h2>Result</h2>
    <p>
        <?php
            $result = $test->check(); 
            // echo $result;
        ?>
    </p>
</body>
</html>

<?php
    $test->closeConnection();
?>