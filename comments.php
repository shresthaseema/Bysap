<?php
session_start();
include 'connection.php';

$itemid=$_GET['item'];

if(isset($_SESSION['name'])){
    $msg = $_POST['comment'];
    $sql = "SELECT * FROM review WHERE user_id=".$_SESSION['id']." AND product_id=".$itemid;
    $reviews = mysqli_query($connection, $sql);
    if(mysqli_num_rows($reviews)<1){
        $insertsql = "INSERT INTO review(`message`,`user_id`,`product_id`) VALUES('$msg',".$_SESSION['id'].",".$itemid." )";
        $_SESSION['c_message']="Review added";
    }else{
        $insertsql = "UPDATE review SET `message`='$msg' WHERE user_id=".$_SESSION['id']." AND product_id=".$itemid;
        $_SESSION['c_message']="Review updated";
    }
    mysqli_query($connection, $insertsql);
    header("Location: product_description.php?item=".$itemid);
}elseif(isset($_COOKIE['name'])){
    $msg = $_POST['comment'];
    $sql = "SELECT * FROM review WHERE user_id=".$_COOKIE['id']." AND product_id=".$itemid;
    $reviews = mysqli_query($connection, $sql);
    if(mysqli_num_rows($reviews)<1){
        $insertsql = "INSERT INTO review(`message`,`user_id`,`product_id`) VALUES('$msg',".$_COOKIE['id'].",".$itemid." )";
        $_SESSION['c_message']="Review added";
    }else{
        $insertsql = "UPDATE review SET `message`='$msg' WHERE user_id=".$_COOKIE['id']." AND product_id=".$itemid;
        $_SESSION['c_message']="Review updated";
    }
    mysqli_query($connection, $insertsql);
    header("Location: product_description.php?item=".$itemid);
}else{
    $_SESSION['c_message']="Only logged in users are allowed to review.";
    header("Location: product_description.php?item=".$itemid);
}
