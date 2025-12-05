<?php

$listOfRotation = file_get_contents('./steps.text');

$steps = explode("\n", $listOfRotation);

if ($steps === null) {
    echo "Error decoding JSON!";die;
} 

?>