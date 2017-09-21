<?php
	//muutujad
	$myName = "simon";
	$myFamilyName = "berner";
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
	$monthNow = $monthNamesEt[date("n") - 1];
	//hindan päeva osa (võrdlemine   <  >   <=  >=   ==   !=   )
	$hourNow = date("H");
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
	//echo $partOfDay;
	//vanusega tegeleine
	//var_dump($_post);
	//echo @_post ["birthYear"];
	$myBirthYear;
	$ageNotice= "";
	if ( isset($_POST["birthYear"]) and $_POST["birthYear"] !=0){
		$myBirthYear = $_POST["birthYear"];
		$myAge = date("Y") - $_POST["birthYear"];
		$ageNotice = "<p>te olete umbkaudu " .$myAge ." aastat vana.</p>";
		$ageNotice .= "<p>olete elanud järgnevatel aastatel</p> <ol>";
		for ($i = $myBirthYear; $i <= date("Y"); $i ++)
			$ageNotice .= "<li>" .$i ."</li>";
	}	
	$ageNotice .="</ol>";
	
	/*for ($i = 0; $i < 5; $i ++)
		echo "ha";
	*/
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		simon berner programmeerib veebi
	</title>
</head>
<body>
	<h1><?php echo $myName ." " .$myFamilyName; ?>, veebiprogrammeerimine</h1>
	<p>See veebileht on loodud õppetöö raames ning ei sisalda mingisugust tõsiseltvõetavat sisu!</p>
	<?php
		echo "<p>Algas PHP õppimine.</p>";
		echo "<p>Täna on ";
		echo date("d. ").$monthNow .date(" Y") .", kell oli lehe avamise hetkel " . date("H:i:s");
		echo ", hetkel on " .$partOfDay .".</p>";
	?>
	<h2>natuke vanusest</h2>
<form method="post">
<label>teie sünniaasta: </label>
<input name="birthYear" id="birthYear" type="number" min="1900" max="2017" value="<?php echo $myBirthYear;?>">
<input name="submitBirthYear" type= "submit" value = "sisesta">


</form>
<?php
   if($ageNotice != ""){
   echo $ageNotice;
   }
?>


</body>
</html>