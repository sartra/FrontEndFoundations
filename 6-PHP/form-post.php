<p>what is your name?</p>

<form method="post"> 

	<input name="name" type="text"> 
	<input type="submit" value="Check cuz array"> </form>

<br>


<?

// print_r($_POST);


// for ($i=0; i<sizeof($cuz); i++) {
	
if ($_POST){

	$cuz = array("catherine", "charlotte", "harry", "jane");
	$isKnown = false;

	foreach ($cuz as $key => $value) {
		if ($value == $_POST['name']){
			$isKnown = true;
		}	
	}

	if ($isKnown) {
		echo "<p>Hi there ".$_POST['name']."!</p>";
	} else {
		echo "<p>Sorry, not a cuz:(</p>";
	}
	
	}

?>



