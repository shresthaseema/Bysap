<?php
function star_rate($fullstar,$halfstar,$emptystar){
$totalstars = 1;
while ($totalstars <=5) {
    if ($fullstar > 0) {
        echo "<i class='fas fa-star ratable-star star-$totalstars cursor'></i>";
        $fullstar = $fullstar - 1;
    } elseif ($halfstar > 0) {
        echo "<i class='fas fa-star-half-alt ratable-star star-$totalstars cursor'></i>";
        $halfstar = $halfstar - 1;
    } else {
        echo "<i class='far fa-star ratable-star star-$totalstars cursor'></i>";
        $emptystar = $emptystar - 1;
    }
    $totalstars++;
}
}
?>