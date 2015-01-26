<?php

include('quickFind.php');

$obj = new QuickFind();


//$obj->union(3,4);
$obj->union(6,1);

// echo $obj->connected(8,9);



echo "<br />";
echo "-------------------------------------";
echo "<pre>";
print_r($_SESSION['dataS']);
echo "</pre>";