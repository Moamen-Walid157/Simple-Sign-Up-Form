<?php
include("inc/conn.php");

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    if($fname && $email && $phone && $pass != ""){
        
        $query = "INSERT INTO signup (fname , email , pass , phone , date) VALUES ('$fname' , '$email' , '$phone' , '$pass' , NOW())";
        $insert = $conn->query($query);
        if($insert){
            header("Location: login.php");
        }
    }
    elseif($fname || $email || $phone || $pass = ""){
        session_start();
        $_SESSION["error"] = "You Missed Something!";
        header("Location: index.php");
    }
}
?>