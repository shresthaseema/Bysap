<?php
function star($fullstar,$halfstar,$emptystar){
$totalstars = 5;
while ($totalstars > 0) {
    if ($fullstar > 0) {
        echo "<i class='fas fa-star'></i>";
        $fullstar = $fullstar - 1;
    } elseif ($halfstar > 0) {
        echo "<i class='fas fa-star-half-alt'></i>";
        $halfstar = $halfstar - 1;
    } else {
        echo "<i class='far fa-star'></i>";
        $emptystar = $emptystar - 1;
    }
    $totalstars--;
}
}
?>