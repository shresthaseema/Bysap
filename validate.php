<?php
session_start();
include 'connection.php';

$email =$_POST['email'];
$password = $_POST['password'];


$query = "SELECT fullname, email, password, user_id FROM users WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0){

    if(isset($_POST['remember'])){
        setcookie('name', $data['fullname'], time() + 86400 *30);
        setcookie('id', $data['user_id'],time() + 86400 *30);
    }

    else{
        $_SESSION['name'] = $data['fullname'];
        $_SESSION['id'] = $data['user_id'];

    }
    header ("Location: homepage.php");

}
else{
    $_SESSION['InvalidLogin'] = "Invalid email address or password.";
    header("Location: signin.php");
}

?>