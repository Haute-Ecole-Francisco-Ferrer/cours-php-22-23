<?php

$usernameexige = "aaa";
$mdpexige = "bbb";

$usernameintroduit = $_POST['username'];
$passwordintroduit = $_POST['pwd'];


if($usernameintroduit == $usernameexige && $passwordintroduit == $mdpexige ){

    // echo "tu peux rentrer";
    
    session_start();
    $_SESSION['username'] = $usernameintroduit;
    header('location: index.php');
    

} else {

    // echo "recommence";

    header('location: index.php?msg=mdppasok');

}