<?php
	/*$country = array("USA","UK","UAE");
	print_r($country);*/

	$student_info = array("Peter", "BLIS", "1985-01-01", "5'6");
	print_r($student_info);
	print "<br>";
	$student_info = array("Name"=>"Peter", "Course"=>"BLIS", "Bday"=>"1985-01-01", "Height"=>"5'6");
	print_r($student_info);
	print "<br><br>";

	$student_info2=array();
	$student_info2[0]="Peter";
	$student_info2[1]="BLIS";
	$student_info2[2]="1985-01-01";
	$student_info2[3]="5'6";
	print_r($student_info2);
	print "<br><br>";

	$student_info3=array();
	$student_info3["Name"]="Peter";
	$student_info3["Course"]="BLIS";
	$student_info3["Bday"]="1985-01-01";
	$student_info3["Height"]="5'6";
	print_r($student_info3);
	print "<br><br>";
	
	print $student_info2[0];
	print "<br>";
	print $student_info3["Bday"];
	print "<br><br>";

	$employee = array(
		array("Sonia", "QC", "F"),
		array("Bob", "Manila", "M"),
		array("Bong", "Pasay", "M"),
		);
	print_r($employee);

	print "<br><br>";
	$employee1 = array();
	$employee1[0][0]="Sonia";
	print $employee1[0][0];
	print " in ";
	$employee2 = array();
	$employee2[1][1]="Manila";
	print $employee2[1][1];

?>