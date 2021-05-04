<?php
    function yCheck($lum, $mag){//checks that Lum and Mag do not vary to much to be true
        if ($lum == -4){
			if (11 < $mag and $mag <= 16){
				return true;
			}else{ return false; }
		}else if ($lum == -3){
			if (10 < $mag and $mag < 14){
				return true;
			}else{ return false; }
		}else if ($lum == -2){
			if (8 < $mag and $mag < 12){
				return true;
			}else{ return false; }
		}else if ($lum == -1){
			if (5 < $mag and $mag < 10){
				return true;
			}else{ return false; }
		}else if ($lum == 0){
			if (2 < $mag and $mag < 8){
				return true;
			}else{ return false; }
		}else if ($lum == 1){
			if (-1 < $mag and $mag < 7){
				return true;
			}else{ return false; }
		}else if ($lum == 2){
			if (-4 < $mag and $mag < 4){
				return true;
			}else{ return false; }
		}else if ($lum == 3){
			if (-6 <= $mag and $mag < -2){
				return true;
			}else{ return false; }
		}else if ($lum == 4){
			if (-9 < $mag and $mag < -6){
				return true;
			}else{ return false; }
		}else if ($lum == 5){
			if (-7 < $mag and $mag < -13){
				return true;
			}else{ return false; }
		}
    }//yCheck

	function xCheck($temp, $spectra){
		if ($spectra == "O"){
			if (30000 < $temp and $temp <= 50000){
				return true;
			}else{ return false; }
		}else if ($spectra == "B"){
			if (13500 < $temp and $temp < 35000){
				return true;
			}else{ return false; }
		}else if ($spectra == "A"){
			if (8500 < $temp and $temp < 14000){
				return true;
			}else{ return false; }
		}else if ($spectra == "F"){
			if (6500 <= $temp and $temp < 8500){
				return true;
			}else{ return false; }
		}else if ($spectra == "G"){
			if (5000 < $temp and $temp < 7000){
				return true;
			}else{ return false; }
		}else if ($spectra == "K"){
			if (4000 < $temp and $temp <= 5500){
				return true;
			}else{ return false; }
		}else if ($spectra == "B"){
			if ($temp <= 4750){
				return true;
			}else{ return false; }
		}
	}//xCheck

	function specGuess($temp){
		if (30000 <= $temp and $temp <= 50000){
			return "O";
		}else if (14000 <= $temp and $temp <= 35000){
			return "B";
		}else if (8500 <= $temp and $temp < 14000){
			return "A";
		}else if (6500 <= $temp and $temp < 8500){
			return "F";
		}else if (5000 < $temp and $temp < 7000){
			return "G";
		}else if (4000 < $temp and $temp <= 5500){
			return "K";
		}else if ($temp <= 4750){
			return "B";
		}
		
		//return "N/A";
	}//specGuess

	function tempRanger($spectra){
		if ($spectra == "O"){
			return "30,000 to 50,000 Kelvin";
		}else if ($spectra == "B"){
			return "17,000 to 30,000 Kelvin";
		}else if ($spectra == "A"){
			return "9,000 to 14,000 Kelvin";
		}else if ($spectra == "F"){
			return "7,000 to 9,000 Kelvin";
		}else if ($spectra == "G"){
			return "5,000 to 7,000 Kelvin";
		}else if ($spectra == "K"){
			return "3,500 to 4,500 Kelvin";
		}else if ($spectra == "B"){
			return "less than 3,500 Kelvin";
		}
	}//xCheck

	function lumRanger($mag){
		if (12 < $mag and $mag <= 15){
				return "about -4";
		}else if (11 < $mag and $mag <= 12){
				return "about -3";
		}else if (9 < $mag and $mag <= 11){
				return "about -2";
		}else if (7 < $mag and $mag <= 9){
				return "about -1";
		}else if (4 < $mag and $mag <= 7){
				return "about 0";
		}else if (0 < $mag and $mag <= 4){
				return "about 1";
		}else if (-2 < $mag and $mag <= 2){
				return "about 2";
		}else if (-5 < $mag and $mag <= -2){
				return "about 3";
		}else if (-7 < $mag and $mag <= -5){
				return "about 4";
		}else if ($mag <= -7){
				return "about 5";
		}
	}//magRange

	function magRanger($lum){
		if ($lum == -4){
			return "13 to 14";
		}else if ($lum == -3){
			return "11 to 12.5";
		}else if ($lum == -2){
			return "9 to 11";
		}else if ($lum == -1){
			return "7 to 9";
		}else if ($lum == 0){
			return "4 to 6.5";
		}else if ($lum == 1){
			return "1 to 4";
		}else if ($lum == 2){
			return "-2 to 1";
		}else if ($lum == 3){
			return "-2 to -4";
		}else if ($lum == 4){
			return "-5 to -7";
		}else if ($lum == 5){
			return "-7 to -12";
		}
	}//lumRange

	function sglt($lum, $temp, &$color){
		if ($lum < 2 ){
			if ($temp >= 7000){
				$color = "#00FFFF";
				return "is more than likley a Wite Dwarf! <br>";
			}else{
				return "is likley a Main Sequence Star. <br>";
			}
		}else if ($lum < 4){
			if ($temp > 7250){
				return "is probably a Main Sequence Star. <br>";
			}else{
				$color = "#FF8C00";
				return "is possibly a Giant! <br>";
			}
		}else{
			if ($temp > 15000){
				return "is possibly a Main Sequence or Super Giant Star! <br>";
			}else{
				$color = "#FF0000";
				return "is deffinetley a Super Giant! <br>";
			}
		}
	}

	function specTemp($spectra){
		if ($spectra == "O"){
			return 30000;
		}else if ($spectra == "B"){
			return 20000;
		}else if ($spectra == "A"){
			return 10000;
		}else if ($spectra == "F"){
			return 8000;
		}else if ($spectra == "G"){
			return 6000;
		}else if ($spectra == "K"){
			return 4000;
		}else if ($spectra == "B"){
			return 2000;
		}
	}

	function sgls($lum, $spectra, &$color){
		$num = specTemp($spectra);
		return sglt($lum, $num, $color);
	}

	// function sglt($mag, $temp){

	// }

	// function sglt($mag, $spectra){

	// }
	
	$button = $_POST['button'] ?? NULL;
	$lum = $_POST['lum'] ?? NULL;
	$mag = $_POST['mag'] ?? NULL;
	$temp = $_POST['temp'] ?? NULL;
	$spectra = $_POST['spectra'] ?? NULL;

	$msg = " ";
	$calc = true;
	
	if ($lum == NULL and $mag == NULL and $temp == NULL and $spectra == NULL and $button != NULL){//if no attributes were added
		$msg = "You must enter atleast one datafield to make a calculation. <br>";
	}else if($lum != NULL and $mag != NULL){//if luminosity and magnitude enteredd check they make sence
		if (yCheck($lum, $mag) == false){
			$msg = "Your Luminosity and Absolute Magnitude don't really match up. <br> Would you try again? <br>";
			$calc = false;
		}
	}else if ($temp != NULL and $spectra != NULL){
		if (xCheck($temp, $spectra) == false){
			$msg = "Your Temperature and Spectra Type don't really match up. <br> Would you try again? <br>";
			$calc = false;
		}
	}

	if ($calc == true and $button != NULL){

		$color = "#FFFF0A";

		$finalLum = " ";
		$finalMag = " ";
		$finalTemp = " ";
		$finalSpectra = " ";

		//Calculate Final Lum & Mag
		if ($lum == NULL and $mag == NULL){
			$finalLum = "N/A";
			$finalMag = "N/A";
		}else if ($mag == NULL){
			$finalLum = $lum;
			$finalMag = magRanger($lum);
		}else if($lum == NULL){
			$finalMag = $mag;
			$finalLum = lumRanger($mag);
		}else{
			$finalLum = $lum;
			$finalMag = $mag;
		}

		//calculate final temp and spectra group
		if ($temp == NULL and $spectra == NULL){
			$finalTemp = "N/A";
			$finalSpectra = "N/A";
		}else if ($temp == NULL){
			$finalSpectra = $spectra;
			$finalTemp = tempRanger($spectra);
		}else if ($spectra == NULL){
			$finalTemp = $temp;
			$finalSpectra = specGuess($temp);
		}else{
			$finalTemp = $temp;
			$finalSpectra = $spectra;
		}

		//calculate star group
		$msg = $msg."<h2>Star Info Results:</h2>";
		$msg = $msg."Luminosity: 10^ ".$finalLum." based off the Sun <br>";
		$msg = $msg."Absolute Magnitude: ".$finalMag." MV<br>";
		$msg = $msg."Temperature: ".$finalTemp."<br>";
		$msg = $msg."Spectra Type: ".$finalSpectra."<br>";

		if (($lum != NULL or $mag != NULL) and ($temp != NULL or $spectra != NULL)){
			$msg = $msg."<br>Enough info was given to estimate the Star Group your star belongs too!<br>I estimate your star ";
			if($lum != NUll){
				if ($temp != NULL){
					$new = sglt($lum, $temp, $color);
					$msg = $msg.$new;
				}else{
					$new = sgls($lum, $spectra, $color);
					$msg = $msg.$new;
				}
			}else{
				if ($temp != NULL){
					//calculate mag temp and mag
				}else{
					//calculate mag and spectra
				}
			}
		}

	}

?>

<html>

	<head>
 	 <link rel="stylesheet" href="stars.css">
	</head>



  <!-- Page content -->

	<div class='stars'>
	<div class='twinkling'>
	<div class='clouds'>

	<div class="container">

	<div class="left-element">
		<font color=<?php echo $color;?>>
		<?php  echo $msg."<br>";   ?>
		</font>
	</div>
	<!-- //left -->




	<div class="right-element">
	<font color="#FFFFFF">

	<h1>Star Info Calculator/ <br>Guessing Game:</h1>

	<form method="POST">
		Luminosity: -4 <input type="range" name="lum" value="" min=-4 max=5> 5<br><br>

		Absolute Magnitude: <input type="number" name="mag" value="" min=-10 max=14><br><br>

		Temperature (Kelvin): <input type="number" name="temp" value="" min= 1000 max=51000><br><br>

		Spectra Type: <br>
		<input type="radio" name="spectra" value="O"> O <br>
		<input type="radio" name="spectra" value="B"> B <br>
		<input type="radio" name="spectra" value="A"> A <br>
		<input type="radio" name="spectra" value="F"> F <br>
		<input type="radio" name="spectra" value="G"> G <br>
		<input type="radio" name="spectra" value="K"> K <br>
		<input type="radio" name="spectra" value="M"> M <br>

		<input type="submit" name="button" value="Calculate">
	</form>

	</font>

	</div>
	<!-- //right -->
	

	<div >
		<embed type="image/jpg" src="hrd.jpg">
	</div>

	</div>
	<!-- /container -->

	</div>
	</div>
	</div>
	<!-- //clouds
	//twinkiling
	//stars -->

</html>