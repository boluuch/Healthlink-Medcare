<?php

//We need to check if the user submitted the form 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"]; 
  try {
    require_once("dbh.inc.php");//to grab a connection to the database or to link it to another fiil
    require_once("login_model.inc.php");
    require_once("login_contr.inc.php");
    

    // ERROR HANDLERS
    $errors = [];
    if(is_input_empty($email ,$pwd)){
       $errors["empty_input"] = "Fill in all fields to proceed!";
    }

    $result = get_user($pdo,$email);

    if(is_email_wrong($result)){
        $errors["login_incorrect"] = "Incorrect login info!";
    }



    require_once("config_session.inc.php");

    if($errors){
      $_SESSION["error_login"] = $errors;
    
      header("Location: "."../../location.php");
      die();


    }   
    
    $newSessionId = session_create_id();
    $sessionId = $newSessionId."_".$result["id"];
    session_id( $sessionId );


    $_SESSION["user_id"] = $result["id"];   
    $_SESSION["user_username"] = htmlspecialchars($result["username"]);

    $_SESSION['last_regeneration'] = time();

    header("Location: " . "../../location.php");

    $pdo=null;
    $stmt = null;
  } catch (PDOException $e) {
    die("Query failed". $e->getMessage());
  }

}
else{
    header("Location: "."../../location.php");
}
