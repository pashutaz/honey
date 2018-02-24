<?php
/**
 * Created by PhpStorm.
 * User: pashutaz
 * Date: 24/02/2018
 * Time: 22:41
 */

$error = '';
if(array_key_exists('signup', $_POST)){
    $query = "SELECT * from Users WHERE email = '".mysqli_real_escape_string($link , $_POST['email'])."' limit  1";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) != 0){
       $error.="<p>That email has been already taken, try to login.</p>";
    }else{
        $query = "INSERT INTO Users(email,password) VALUES ('".mysqli_real_escape_string($link , $_POST['email'])."','".mysqli_real_escape_string($link , $_POST['password'])."')";
        $result = mysqli_query($link, $query);
        $_SESSION['id'] = mysqli_insert_id($link);
    }

}