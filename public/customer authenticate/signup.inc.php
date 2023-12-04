<?php

//We need to check if the user submitted the form 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["full_name"];
    $pwd = $_POST["pass_word"];
    $phone_number = $_POST["phone_number"];
    $email= $_POST["email"];
    $location = $_POST["location"];

  //Anytime we want to ouput the data we need to sanitize the data using htmlspecialchars()
// dont add user data directly inside th query
 // ($firstname,$lastname,$username,$email,$pwd)
  try {
    require_once("dbh.inc.php");//to grab a connection to the database or to link it to another fiil

    // non named parameters  for prepare statement
    // $query = "INSERT INTO users (firstname,lastname,username,email,pwd)
    // VALUES (?,?,?,?,?);";

    $query = "INSERT INTO customer (full_name,password_hash,phone_number,email,location)
    VALUES (:full_name,:password_hash,:phone_number,:email,:location);";

    $stmt = $pdo->prepare($query);// submits query to the database
 
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, array("cost"=> 12 ));
    
    $stmt->bindParam(":full_name", $name);
    $stmt->bindParam(":location", $location);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone_number", $phone_number);
    $stmt->bindParam(":password_hash", $hashedPwd);

    $stmt->execute();
    //Array was used for not named parameters
    // $stmt->execute([$firstname,$lastname,$username,$email,$pwd]);

    $pdo = null;
    $stmt = null;

    header("Location: "."../../location.php");
    
    die();
  } catch (PDOException $e) {
    die("Query failed". $e->getMessage());
  }

}
else{
    header("Location: "."../../location.php");
}