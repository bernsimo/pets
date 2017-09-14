<?php
    //muutujad
	$myName = "Simon";
	$myFamilyName = "Berner";
	//hindan päeva os
	$hourNow = date ("H");
	$partOfDay = "";
	if ($hourNow < 8){
	$partOfDay = "varajane hommik";

	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev";
	}
	if ($hourNow > 16){
		$partOfDay = "vaba aeg";
	}
//echo $partOfday
?>


<DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>
<?php 
echo "<algas php õppimine.>";
echo "<p>Täna on ";
echo date("d.m.Y") ,",kell oli lehe avamise hetkel" , date("H:i:s");
echo ", hetkel on " .$partOfDay .".</p>";

?>
</body>
</html>