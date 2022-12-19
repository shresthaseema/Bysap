<?php
include 'connection.php';
session_start();

if (isset($_POST['firstname'])) {
    $firstname = htmlentities($_POST['firstname']);
}
if (isset($_POST['lastname'])) {
    $lastname = htmlentities($_POST['lastname']);
}

if ($lastname) {
    $fullname = $firstname . ' ' . $lastname;
} else {
    $fullname = $firstname;
}



$email = htmlentities($_POST['email']);
if (isset($_POST['customersubmit'])) {
    $role = 'Customer';
    $_SESSION['Customer'] = 1;
} else if (isset($_POST['tradersubmit'])) {
    $role = 'Trader';
    $_SESSION['Trader'] = 1;
}


$uppercase = preg_match('@[A-Z]@', $_POST['password']);
$lowercase = preg_match('@[a-z]@', $_POST['password']);
$number = preg_match('@[0-9]@', $_POST['password']);



if ($uppercase && $lowercase && $number && strlen($_POST['password']) >= 8) {
    if ($_POST['password'] == $_POST['confirmpassword']) {
        $password = htmlentities(sha1($_POST['password']));
    } else {
        $_SESSION['mismatch'] = '<h6>Password does not match.</h6>';
    }
} else {
    $_SESSION['error'] = '<h6>Password must contain at least 8 characters, one uppercase, one lowercase and a number.</h6>';
}

$address = htmlentities($_POST['address']);
$contact = htmlentities($_POST['contact']);


if (isset($_POST['gender'])) {
    $gender = htmlentities($_POST['gender']);
} else {
    $gender = null;
}

$dob = htmlentities($_POST['dob']);

if (isset($password)) {

    $query = "INSERT INTO users (fullname, email, password, role, address, contact, gender,dob) VALUES ('$fullname', '$email', '$password', '$role', '$address', $contact,'$gender', '$dob')";

    $result = mysqli_query($connection, $query);


    if ($result) {
        header('Location: signin.php');
    } 
}
 header('Location: register.php');
?>