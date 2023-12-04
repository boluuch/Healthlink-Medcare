<?php

declare(strict_types=1);
function output_username(){
    if(isset($_SESSION["user_id"])){
        echo "You are logged in as ". $_SESSION["user_username"] ;
    }else{
        echo "You are logged out";
    }
}


function check_login_errors(){
    if(isset($_SESSION["error_login"])){
        $errors = $_SESSION["error_login"];
        echo "<br>";
        foreach($errors as $error){
            echo '<p style="color: red;position="relative"; text-align: center;">' . $error . '</p>';
        }
        unset($_SESSION["error_login"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<br>';
        echo '<p style="color: green; position="relative";text-align: center;">Login successful</p>';
    }
}