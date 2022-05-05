<?php  

include("layout.php");
include("dbconnect.php");
echo ("in login check");
if (isset($_POST['submit-btn']))
{

    $email = $_POST['email'];
    $pwd = $_POST['password'];
    echo ($email);
    echo ($password);

}




?>