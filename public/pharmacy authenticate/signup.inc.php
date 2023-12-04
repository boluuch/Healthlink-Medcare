<?php

//We need to check if the user submitted the form 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $license = $_POST["license_number"];
    $location = $_POST["location"];
    $email= $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $pwd = $_POST["password_hash"];
  //Anytime we want to ouput the data we need to sanitize the data using htmlspecialchars()
// dont add user data directly inside th query
 // ($firstname,$lastname,$username,$email,$pwd)

 if (empty($name) || empty($pwd)) {
  echo "Please fill in all fields.";
} else {
  // Call Python function or script for additional verification
  $python_script_path = "verify.py";
  $command = escapeshellcmd("python3 $python_script_path");
  $output = shell_exec($command);

  // Display the result from the Python script
  echo $output;
}


  try {
    require_once("dbh.inc.php");//to grab a connection to the database or to link it to another fiil

    // non named parameters  for prepare statement
    // $query = "INSERT INTO users (firstname,lastname,username,email,pwd)
    // VALUES (?,?,?,?,?);";

    $query = "INSERT INTO pharmacy (name,license_number,location,email,phone_number,password_hash)
    VALUES (:name,:license_number,:location,:email ,:phone_number,:password_hash);";

    $stmt = $pdo->prepare($query);// submits query to the database
 
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, array("cost"=> 12 ));
    
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":license_number", $license);
    $stmt->bindParam(":location", $location);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone_number", $phone_number);
    $stmt->bindParam(":password_hash", $hashedPwd);

    $stmt->execute();
    //Array was used for not named parameters
    // $stmt->execute([$firstname,$lastname,$username,$email,$pwd]);

    $pdo = null;
    $stmt = null;

    header("Location: "."../../home.php");
    
    die();
  } catch (PDOException $e) {
    die("Query failed". $e->getMessage());
  }

}
else{
    header("Location: "."../../home.php");
}