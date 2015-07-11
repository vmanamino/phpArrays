<?php
/* Groundhog's day schedule */
# two-dimensional array of days and tasks assigned to hours of the day
$weekly_schedule = array(
			"Sunday"=>array(
				"9am"=>"wake up",
				"10am"=>"eat breakfast",
				"11am"=>"youtube vids",
				"12pm"=>"go to work",
				"1pm"=>"fiddle around",
				"2pm"=>"do some work",
				"3pm"=>"take a break",
				"4pm"=>"get some work done"		
			),
			"Monday"=>array(
				"9am"=>"wake up",
				"10am"=>"eat breakfast",
				"11am"=>"youtube vids",
				"12pm"=>"go to work",
				"1pm"=>"fiddle around",
				"2pm"=>"do some work",
				"3pm"=>"take a break",
				"4pm"=>"get some work done"		
			),
			"Tuesday"=>array(
				"9am"=>"wake up",
				"10am"=>"eat breakfast",
				"11am"=>"youtube vids",
				"12pm"=>"go to work",
				"1pm"=>"fiddle around",
				"2pm"=>"do some work",
				"3pm"=>"take a break",
				"4pm"=>"get some work done"		
			),
			"Wednesday"=>array(
				"9am"=>"wake up",
				"10am"=>"eat breakfast",
				"11am"=>"youtube vids",
				"12pm"=>"go to work",
				"1pm"=>"fiddle around",
				"2pm"=>"do some work",
				"3pm"=>"take a break",
				"4pm"=>"get some work done"		
			),
			"Thursday"=>array(
				"9am"=>"wake up",
				"10am"=>"eat breakfast",
				"11am"=>"youtube vids",
				"12pm"=>"go to work",
				"1pm"=>"fiddle around",
				"2pm"=>"do some work",
				"3pm"=>"take a break",
				"4pm"=>"get some work done"		
			),
			"Friday"=>array(
				"9am"=>"wake up",
				"10am"=>"eat breakfast",
				"11am"=>"youtube vids",
				"12pm"=>"go to work",
				"1pm"=>"fiddle around",
				"2pm"=>"do some work",
				"3pm"=>"take a break",
				"4pm"=>"get some work done"		
			),
			"Saturday"=>array(
				"9am"=>"wake up",
				"10am"=>"eat breakfast",
				"11am"=>"youtube vids",
				"12pm"=>"go to work",
				"1pm"=>"fiddle around",
				"2pm"=>"do some work",
				"3pm"=>"take a break",
				"4pm"=>"get some work done"		
			)			
		);
# go through the array using each to separate the day from its assigned array object
# the key of the first array is the day, but each also returns it as a value which list accepts as the variable day, and list accepts in the second variable hours the second array object
# keep in mind list parses the array by numerical index not the associative keys 'key' and 'value'.
while (list($day, $hours) = each($weekly_schedule)) {
	echo "Here what I do on ".$day.":<br/>";
	# go through hours array object with each, which returns the key as a value (in order before the keys corresponding value).  List accepts the associative key as the time variable and its corresponding value as the task variable
	while (list($time, $task) = each($hours)) {
		echo "<pre>";
		print_r($task);
		echo"</pre>";
		echo "At ".$time." I ".$task." <br/>";	
	}
	echo "<br/>";
}
?>