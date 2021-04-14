<?php
$name = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$text = $_POST['text'];
$gender = $_POST['gender'];

// pass word format
$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$num = preg_match('@[0-9]@', $password);

if(empty($name)){
    $err = "Oi Pola Nam da!";
    header('location:index.php?name_err='.$err);
}
else if(empty($email)){
    $err = "Oi Pola email da!";
    header('location:index.php?email_err='.$err);
}
else if(empty($email)){
    $err = "Oi Pola email da!";
    header('location:index.php?email_err='.$err);
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $err = "Oi Pola tik thak email da!";
    header('location:index.php?email_err='.$err);
}
else if(empty($password)){
    $err = "Oi Pola passord da!";
    header('location:index.php?pass_err='.$err);
}
else if(!$upper || !$lower || !$num || strlen($password) < 8){
    $err = "In pass must includes UpperCase LowerCase Number and Minimum 8 charecter !";
    header('location:index.php?pass_err='.$err);
}
else if($repassword != $password){
    $err = "Password does not match!";
    header('location:index.php?repass_err='.$err);
}
else if(empty($text)){
    $err = "Kiso to lehk beta";
    header('location:index.php?text_err='.$err);
}
else if(strlen($text) >= 150){
    $err = "You can't massage up to 50 word.";
    header('location:index.php?text_err='.$err);
}
else if(empty($gender)){
    $err = "Select Your gender";
    header('location:index.php?gender_err='.$err);
}
else{
    echo $name."<br>" ;
    echo $email."<br>" ;
    echo $password."<br>" ;
    echo $repassword."<br>" ;
    echo $text."<br>" ;
    echo $gender."<br>" ;
}
?>