<?php 
session_start();
require_once('../db_connect.php');
$name = htmlspecialchars(trim($_POST ['user_name']));
$email = htmlspecialchars($_POST['user_email']);
$password = htmlspecialchars($_POST['user_password']);
$confirm_password = htmlspecialchars($_POST['user_password']);
// $user_confirm_password = htmlspecialchars($_POST['user_confirm_password']);

//emailo check in database
$email_cheak_query = " SELECT COUNT(*)AS 'result' FROM admins WHERE email= '$email'";
 $email_cheak_db= mysqli_query($db_connect,$email_cheak_query);
$email_cheak_result = mysqli_fetch_assoc($email_cheak_db);

$flg = false;
if($name){
    $remove_name_space = str_replace(" ","",$name);
    if (ctype_alpha($remove_name_space)) {
        $_SESSION["old_name"]= $name;
   }else{
    $flg = true;
    $_SESSION['name_error'] = 'name is number not working';
   } 
    } else {
    $flg = true;
    $_SESSION['name_error'] = 'Enter your name';

}
if($email){
  if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    if ($email_cheak_result['result']) {
        $flg = true;
        $_SESSION["email_error"]= 'email ace';
    }
    $_SESSION["old_email"]= $email;

  }else{
    $flg = true;
    ($_SESSION['email_error'] = 'Enter your email');
  }
}else{
    $flg = true;
    ($_SESSION['email_error'] = 'email not valid');
}
if($password){
        if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',
        $password)) {
             $flg = true ;
            $_SESSION['password_error']= 'password thik nai';
        }
           }else{
            $flg = true ;
            ($_SESSION['password_error'] = 'password is number not working');
           }
if($confirm_password) {
    if (!($password === $confirm_password)) {
        $flg = true;
        ($_SESSION['confirm_password_error'] = 'Enter your Confirm_password');
    }
}else{
    $flg = true ;
    ($_SESSION['confirm_password_error'] = 'Enter your Confirm_password not working');
}

if($flg) {
    header('location:./signuo.php');
}else{
  
  $password_encode = sha1($password);

  $admin_query = "INSERT INTO `admins` ( name, email, password) VALUES ('$name','$email','$password_encode ')" ;
  mysqli_query($db_connect, $admin_query);
  $_SESSION['signin_status'] = "Welcome_ $name";
  header('location:./sign.php');
}
