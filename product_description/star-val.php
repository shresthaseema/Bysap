<?php
function starval($avgrating){
$avgrating = number_format($avgrating, 1);
$intvalue = floor($avgrating);
$decimals = $avgrating - $intvalue;
if ($decimals > 0.5) {
    $roundedval = 0.5;
    $remainder = $decimals - $roundedval;
    if ($remainder > 0.25) {
        $roundedval += 0.5;
    }
    $starval = $intvalue + $roundedval;
    return $starval;
} else {
    $roundedval = 0.5;
    if ($decimals < 0.25) {
        $roundedval -= 0.5;
    }
    $starval = $intvalue + $roundedval;
    return $starval;
}
}
