<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require './FetchData.php';

foreach ($steps as $key => $val) {
	echo "Value : ".$val.'</br>';
}

?>