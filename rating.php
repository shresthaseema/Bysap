<?php 
session_start();
include 'connection.php';

$ratingvalue = htmlentities($_GET['rating']);
$sql = "SELECT * FROM review WHERE user_id=".$_SESSION['id']." AND product_id=".$_GET['item'];
echo $sql;
$ratings=mysqli_query($connection, $sql);
if(isset($_SESSION['name'])){
    if(mysqli_num_rows($ratings)<1){
        $insertsql = "INSERT INTO review(`rating`,`user_id`,`product_id`) VALUES('$ratingvalue',".$_SESSION['id'].",".$_GET['item']." )";
    }else{
        $insertsql = "UPDATE review SET `rating`='$ratingvalue' WHERE user_id=".$_SESSION['id']." AND product_id=".$_GET['item'];
    }
    mysqli_query($connection,$insertsql);
    header("Location: product_description.php?item=".$_GET['item']);
}elseif(isset($_COOKIE['name'])){
    if(mysqli_num_rows($ratings)<1){
        $insertsql = "INSERT INTO review(`rating`,`user_id`,`product_id`) VALUES('$ratingvalue',".$_COOKIE['id'].",".$_GET['item']." )";
    }else{
        $insertsql = "UPDATE review SET `rating`='$ratingvalue' WHERE user_id=".$_COOKIE['id']." AND product_id=".$_GET['item'];
    }
    mysqli_query($connection,$insertsql);
    header("Location: product_description.php?item=".$_GET['item']);
}
?>
