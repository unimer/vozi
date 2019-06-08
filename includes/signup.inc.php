<?php

#allow this functionality only on submit button

if (isset($_POST['signup-btn'])) {
   require 'dbh.inc.php';

   $username = $_POST['uid'];
   $email = $_POST['mail'];
   $password = $_POST['pwd'];
   $passwordRepeat = $_POST['pwd-repeat'];

   #Error handlers
   if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
     header("Location: ../signup.form.php?error=emptyfields&uid=".$username."&mail=".$email);
     exit(); //stop code here
   }
   else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
     header("Location: ../signup.form.php?invalidmailuid");
     exit(); //stop code here
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     header("Location: ../signup.form.php?error=invalidmail&uid=".$username);
     exit(); //stop code here
   }
   else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
     header("Location: ../signup.form.php?error=invaliduid&mail=".$email);
     exit(); //stop code here
   }
   else if($password !== $passwordRepeat){
     header("Location: ../signup.form.php?error=passwordcheck&uid=".$username."&mail=".$email);
     exit(); //stop code here

   }
   else {
    $query = "SELECT uidUsers FROM users WHERE uidUsers=?"; //placeholder to protect database from sql commands
  //  $q_result = $conn->query($query);
    $stmt = mysqli_stmt_init($conn); //prepared statement

     if (!mysqli_stmt_prepare($stmt, $query)){ //check if we can prepare this statement
       header("Location: ../signup.form.php?error=sqlerror");
       exit();
     }
    else{
      mysqli_stmt_bind_param($stmt, "s", $username); //take the information from the user and send it to database
      mysqli_stmt_execute($stmt); //run this information inside the database
      //check if we get a match
      mysqli_stmt_store_result($stmt); //takes the result from the db and stores in stmt
      $resultchk = mysqli_stmt_num_rows($stmt); //how many those results we have in db
      if ($resultchk > 0) {
         header("Location: ../signup.form.php?error=usernametaken&mail=".$email);
         exit();
      }
      else{
        $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?,?,?)";
        $stmt = mysqli_stmt_init($conn); //prepared statement
        if (!mysqli_stmt_prepare($stmt, $sql)) { //check if we can prepare this statement
          header("Location: ../signup.form.php?error=sqlerror");
          exit;
        }
        else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT); //hash pasword

          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd); //take this information to db
          mysqli_stmt_execute($stmt); //run this information to the db
          header("Location: ../post_signup.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt); //close statement
  mysqli_close($conn); //close connection to the db
}
else{
  header("Location: ../index.php");
  exit();
}
