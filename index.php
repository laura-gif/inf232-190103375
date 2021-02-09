<?php
echo inches_to_feet(12);
  echo '<br/>';  
	echo inches_to_feet(360);
	echo '<br/>'; 
	echo inches_to_feet(3612);
	echo '<br/>'; 
	echo inches_to_feet(324);
	echo '<br/>'; 
	echo inches_to_feet(3012);
	echo '<br/>'; 
	echo inches_to_feet(11);


function inches_to_feet($inches) {
	if ($inches<12) {
  echo 0;
		}
	else{
	echo $inches/12;}
}
?>