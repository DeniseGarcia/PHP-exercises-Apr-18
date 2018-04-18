<?php
//referencing variables and constants. Save this as referencing_variables_and_constants.php
	define("FIRST_NAME", "Sonia");
	define("LAST_NAME", "Pascua");
	$university ="University of the Philippines Diliman";
	$college = "College of Engineering";
	$department = "Department of Computer Science";
 	$affiliation = $department.", ".$college.", ".$university;
	print "Good morning. I am Prof. ".FIRST_NAME." ".LAST_NAME." of the $affiliation<br><br>";
 	print "You may call me " .FIRST_NAME." of the " .$department. ". See you! <BR><BR>"

?> 