<?php

declare(strict_types=1);

// <div class="input-boxes">
// <div class="input-box">
//   <i class="fas fa-user"></i>
//   <input type="text" name="username" placeholder="Enter your Username" >
// </div>
// <div class="input-box">
//   <i class="fas fa-envelope"></i>
//   <input type="text" name="email"  placeholder="Enter your email" >
// </div>
// <div class="input-box">
//   <i class="fas fa-lock"></i>
//   <input type="password" name="pwd"  placeholder="Enter your password" >
// </div>
// <div class="input-box">
//   <i class="fas fa-lock"></i>
//   <input type="password" name="confirm_pwd" placeholder="Confirm password" >
// </div>
// <div class="text"><a href="#">Forgot password?</a></div>
// <div class="button input-box">
//   <input type="submit" value="Sumbit">

$pdo = new PDO("mysql:host=localhost;dbname=healthlink", "root", "Ucee1812!");
function signup_input() {
    echo '<form action="your_form_processing_script.php" method="post">';
    if (isset($_SESSION["signup_data"]["username"]) && 
        !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '">
        </div>';
    } else {
        echo '<div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Enter your Username">
        </div>';
    }

    echo '<div class="input-box">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Enter your email" value="' .
         ($_SESSION["signup_data"]["email"] ?? '') . '">
        </div>';

    echo '<div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="pwd" placeholder="Enter your password">
        </div>';

    echo '<div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirm_pwd" placeholder="Confirm password">
        </div>';

    echo '<div class="button input-box">
            <input type="submit" value="Submit">
          </div>';
    echo '</form>';
}

function check_signup_errors() {
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";
        foreach ($errors as $error) {
            echo '<p style="color: red;position="relative"; text-align: center;">' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p style="color: green; position="relative";text-align: center;">Sign up successful</p>';
    }
}
