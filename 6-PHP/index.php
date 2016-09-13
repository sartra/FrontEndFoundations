hello world! xxx html

<br>

<?php

echo "<p>hello world in PHP!</p>";

$name = "sarah";

echo "<p>My name is <span style='text-transform: uppercase;'>$name.</span><p>";

$string1 = "<div style='font-family:arial; font-size: 14pt;'>First part of a string";

$string2 = "that I want to <strong>concatenate</strong></div>";

echo $string1." ".$string2;

$myNumber = 35;

$calculator = $myNumber * $myNumber;

echo "<p>myNumber squared is ".$calculator."</p>";

$myBool = true;

echo "<p>This statement is true? ".$myBool."</p>";




$myArray = array("bryan", "john", "sarah");

$myArray[] = "ann and jim";

print_r($myArray);
echo $myArray[2];

echo "<br><br>";

$anotherArray[0]="harry";
$anotherArray[1]="jane";

print_r($anotherArray);

echo "<br><br>";

$thirdArray = array("France" => "French", "USA" => "English", "Ghana" => "Twi");
print_r($thirdArray);
echo "<p>this array is ".sizeof($thirdArray)." long</p>";

unset($thirdArray["France"]);
print_r($thirdArray);




echo "<br><br>";

$user = "sartra";
if ($user == "sartra") {
	echo "hello sartra!";
} else {
	echo "i don't know you";
}

echo "<br><br>";

$age = 30;
if ($age >= 18 && $user == "sartra") {
	echo "have a cider!";
} else {
	echo "you're too young my dear.";
}


echo "<br><br>";

for($i = 0; $i<10; $i++){

	echo $i."<br>";
	
	}
	
echo "<br><br>";	
	
for($i = 0; $i<=30; $i=$i+2){

	echo $i."<br>";
	
	}	
	
echo "<br><br>";	
	
for($i = 10; $i>=0; $i--){

	echo $i."<br>";
	
	}		
	
echo "<br><br>";

$family = array("rob", "tamara", "oskar");

foreach ($family as $key => $value) {
	
	$family[$key] = $value." lovell";
	
	echo "Array item ".$key." is ".$value."<br>";
	
	
}



for ($i = 0; $i<sizeof($family); $i++){
	echo $family[$i]."<br>";
}

echo "<br><br>";


echo "<br><br>";

$i = 0;
while ($i < 10) {
	echo $i."<br>";
	$i++;
	}
	
echo "<br><br>";	

$i = 5;	
while ($i <= (5 * 5)) {
	echo $i."<br>";
	$i=+$i+5;
	}	

$pieces = array("king", "queen", "knight", "bishop", "pawn");

echo "<br><br>";

$i=0;
while($i < sizeof($pieces)) {
	echo $pieces[$i]."<br>";
	$i++;
	}


echo "<br><br>";

print_r($_GET);
echo "<br><br>";
echo $_GET["name"];


?>