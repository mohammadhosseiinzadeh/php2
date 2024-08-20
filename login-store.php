<?php
session_start();
    // echo 'hi';
    // echo'<pre>';
    // var_dump($_GET)
    // $email = $_GET['email'];
    // $pass = $_GET['pass'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if($email === 'mohammadford150@gmail.com' && $pass === 'awd' ){
       $_SESSION['user'] = $email;
       header("Location: panel.php");
       exit;
    }
    else{
        echo 'OUT';
    }
    // echo'<pre>';
    // // var_dump($_REQUEST)
    // var_dump($_FILES)
?>