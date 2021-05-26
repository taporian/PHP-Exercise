

<?php 
$_POST['FullName'];
$_POST['username'];
$_POST['password'];
$_POST['confirm-password'];
$_POST['Email'];
$_POST['Phone'];
$_POST['dateofbirth'];
$_POST['SocialSecurityNumber'];
$_POST['loginUsername'];
$_POST['loginPassword'];


if($_POST['password'] != $_POST['confirm-password'])
                {
                    echo("Oops! Password did not match! Try again. ").'<br>';
                
                }echo '<br>';

if($_POST['username'] == $_POST['loginUsername'])
                {
                    echo("User by this name already exists").'<br>';
                
                }echo '<br>';

 print_r( $_POST);

?>
