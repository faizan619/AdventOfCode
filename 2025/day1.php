<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require './FetchData.php';

$curr_val = 50;
$zero_count = 0;


// $test = 104 % 100;
// $test = -324 %100;
// echo $test+=100;

foreach ($steps as $key => $val) {
    $a = $val[0];
    $num = substr($val,1);
	if ($a === 'R') {  
        // echo "First : ".$num.'</br>';
        echo "R - ". $curr_val + $num.'</br>';
        // $curr_val = ($curr_val + $num) % 100;
    }
    elseif ($a === 'L') {  
        // echo "Second : ".$num.'</br>';
        // echo "L - ".$curr_val - $num.'</br>';

        // $curr_val = ($curr_val - $num) % 100;
        // if ($curr_val < 0) {
        //     $curr_val += 100;
        // }
    }
    if ($curr_val === 0) {
        $zero_count++;
    }
}
echo "Total : ".$zero_count;

?>