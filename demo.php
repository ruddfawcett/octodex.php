<?php
	// include the PHP Octodex class
	include('octodex.php');
	
	// initialize the class and store it in $octodex
	$octodex = new Octodex();
	
	// uncomment/comment which methods you would like to test below
	
	// fetch all octocats and print the returned array
	print_r($octodex->completeOctodex());
	
	// fetch random octocat and print the returned array
	// print_r($octodex->randomOctocat());
	
	// fetch numbered octocat and print the returned array
	// print_r($octodex->numberedOctocat(1));
?>