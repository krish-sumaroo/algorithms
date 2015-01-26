<?php

session_start();
$dsAA = array();


for($i=0;$i<10;$i++){
			$dsAA[$i] = $i;
		}

$_SESSION['dataS'] = $dsAA;	

