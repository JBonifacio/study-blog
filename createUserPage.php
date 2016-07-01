<!DOCTYPE html>

<?php
    require('generateForm.php');
    require('generateHeader.php');
?>

<html>
    <?php
        $h = new generateHeader('Create New User');
        $h->insertHeader();
    ?>
    <body>
        <?php
            $u = new generateForm(
                array(
                    // array('labelFor','labelText','formType','formName','formId','maxLength'),
                    array('username','Username','text','username','username',50),
                    array('password','Password','password','password','password',50),
                    array('passwordConfirm','Confirm Password','passwordConfirm','passwordConfirm','passwordConfirm',50),
                    array('firstName','First Name','firstName','firstName','firstName',300),
                    array('lastName','Last Name','lastName','lastName','lastName',300),
                    array('email','Email Address','email','email','email',300), 
                    array('emailConfirm','Confirm Email Address','emailConfirm','emailConfirm','emailConfirm',300)
                    )
                );
            $u->generateForm();
        ?>
    </body>
</html>