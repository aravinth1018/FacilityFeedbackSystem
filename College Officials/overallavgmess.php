<?php
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM mess";
 
 
 


 $FOOD1 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year' )*100 as avgFOOD1 FROM mess WHERE FOOD = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD1 = $row["avgFOOD1"];
	
	}
}
$FOOD2 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgFOOD2 FROM mess WHERE FOOD = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD2 = $row["avgFOOD2"];

	}
}
$FOOD3 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgFOOD3 FROM mess WHERE FOOD = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD3 = $row["avgFOOD3"];

	}
}
$FOOD4 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgFOOD4 FROM mess WHERE FOOD = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD4 = $row["avgFOOD4"];

	}
}
$FOOD5 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM mess WHERE FOOD = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD5 = $row["avg"];

	}
}


$FOOD6 = "SELECT COUNT(FOOD) as countFOOD FROM mess where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD6))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD = $row["countFOOD"];
	}
}


$FOOD7 = "SELECT COUNT(FOOD) as countFOOD1 FROM mess WHERE FOOD = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD7))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD1 = $row["countFOOD1"];
	}
}

$FOOD8 = "SELECT COUNT(FOOD) as countFOOD2 FROM mess WHERE FOOD = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD8))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD2 = $row["countFOOD2"];
	}
}
$FOOD9 = "SELECT COUNT(FOOD) as countFOOD3 FROM mess WHERE FOOD = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD9))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD3 = $row["countFOOD3"];
	}
}
$FOOD10 = "SELECT COUNT(FOOD) as countFOOD4 FROM mess WHERE FOOD = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD10))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD4 = $row["countFOOD4"];
	}
}
$FOOD11 = "SELECT COUNT(FOOD) as countFOOD5 FROM mess WHERE FOOD = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FOOD11))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD5 = $row["countFOOD5"];
	}
}




 $WATER1 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgWATER1 FROM mess WHERE WATER = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER1 = $row["avgWATER1"];
	
	}
}
$WATER2 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgWATER2 FROM mess WHERE WATER = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER2 = $row["avgWATER2"];

	}
}
$WATER3 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgWATER3 FROM mess WHERE WATER = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER3 = $row["avgWATER3"];

	}
}
$WATER4 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgWATER4 FROM mess WHERE WATER = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER4 = $row["avgWATER4"];

	}
}
$WATER5 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM mess WHERE WATER = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER5 = $row["avg"];

	}
}


$WATER6 = "SELECT COUNT(WATER) as countWATER FROM mess where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER6))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER = $row["countWATER"];
	}
}


$WATER7 = "SELECT COUNT(WATER) as countWATER1 FROM mess WHERE WATER = 1 and  dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER7))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER1 = $row["countWATER1"];
	}
}

$WATER8 = "SELECT COUNT(WATER) as countWATER2 FROM mess WHERE WATER = 2 and  dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER8))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER2 = $row["countWATER2"];
	}
}
$WATER9 = "SELECT COUNT(WATER) as countWATER3 FROM mess WHERE WATER = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER9))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER3 = $row["countWATER3"];
	}
}
$WATER10 = "SELECT COUNT(WATER) as countWATER4 FROM mess WHERE WATER = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER10))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER4 = $row["countWATER4"];
	}
}
$WATER11 = "SELECT COUNT(WATER) as countWATER5 FROM mess WHERE WATER = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($WATER11))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER5 = $row["countWATER5"];
	}
}





 $MENU1 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgMENU1 FROM mess WHERE MENU = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU1 = $row["avgMENU1"];
	
	}
}
$MENU2 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgMENU2 FROM mess WHERE MENU = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU2 = $row["avgMENU2"];

	}
}
$MENU3 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgMENU3 FROM mess WHERE MENU = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU3 = $row["avgMENU3"];

	}
}
$MENU4 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgMENU4 FROM mess WHERE MENU = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU4 = $row["avgMENU4"];

	}
}
$MENU5 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM mess WHERE MENU = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU5 = $row["avg"];

	}
}


$MENU6 = "SELECT COUNT(MENU) as countMENU FROM mess where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU6))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU = $row["countMENU"];
	}
}


$MENU7 = "SELECT COUNT(MENU) as countMENU1 FROM mess WHERE MENU = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU7))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU1 = $row["countMENU1"];
	}
}

$MENU8 = "SELECT COUNT(MENU) as countMENU2 FROM mess WHERE MENU = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU8))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU2 = $row["countMENU2"];
	}
}
$MENU9 = "SELECT COUNT(MENU) as countMENU3 FROM mess WHERE MENU = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU9))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU3 = $row["countMENU3"];
	}
}
$MENU10 = "SELECT COUNT(MENU) as countMENU4 FROM mess WHERE MENU = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU10))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU4 = $row["countMENU4"];
	}
}
$MENU11 = "SELECT COUNT(MENU) as countMENU5 FROM mess WHERE MENU = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($MENU11))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU5 = $row["countMENU5"];
	}
}



 $TIME1 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgTIME1 FROM mess WHERE TIME = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME1 = $row["avgTIME1"];
	
	}
}
$TIME2 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgTIME2 FROM mess WHERE TIME = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME2 = $row["avgTIME2"];

	}
}
$TIME3 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgTIME3 FROM mess WHERE TIME = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME3 = $row["avgTIME3"];

	}
}
$TIME4 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgTIME4 FROM mess WHERE TIME = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME4 = $row["avgTIME4"];

	}
}
$TIME5 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM mess WHERE TIME = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME5 = $row["avg"];

	}
}


$TIME6 = "SELECT COUNT(TIME) as countTIME FROM mess where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME6))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME = $row["countTIME"];
	}
}


$TIME7 = "SELECT COUNT(TIME) as countTIME1 FROM mess WHERE TIME = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME7))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME1 = $row["countTIME1"];
	}
}

$TIME8 = "SELECT COUNT(TIME) as countTIME2 FROM mess WHERE TIME = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME8))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME2 = $row["countTIME2"];
	}
}
$TIME9 = "SELECT COUNT(TIME) as countTIME3 FROM mess WHERE TIME = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME9))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME3 = $row["countTIME3"];
	}
}
$TIME10 = "SELECT COUNT(TIME) as countTIME4 FROM mess WHERE TIME = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME10))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME4 = $row["countTIME4"];
	}
}
$TIME11 = "SELECT COUNT(TIME) as countTIME5 FROM mess WHERE TIME = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($TIME11))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME5 = $row["countTIME5"];
	}
}



$VENTILATION1 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgVENTILATION1 FROM mess WHERE VENTILATION = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION1 = $row["avgVENTILATION1"];
	
	}
}
$VENTILATION2 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgVENTILATION2 FROM mess WHERE VENTILATION = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION2 = $row["avgVENTILATION2"];

	}
}
$VENTILATION3 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgVENTILATION3 FROM mess WHERE VENTILATION = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION3 = $row["avgVENTILATION3"];

	}
}
$VENTILATION4 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgVENTILATION4 FROM mess WHERE VENTILATION = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION4 = $row["avgVENTILATION4"];

	}
}
$VENTILATION5 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM mess WHERE VENTILATION = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION5 = $row["avg"];

	}
}


$VENTILATION6 = "SELECT COUNT(VENTILATION) as countVENTILATION FROM mess where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION6))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION = $row["countVENTILATION"];
	}
}


$VENTILATION7 = "SELECT COUNT(VENTILATION) as countVENTILATION1 FROM mess WHERE VENTILATION = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION7))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION1 = $row["countVENTILATION1"];
	}
}

$VENTILATION8 = "SELECT COUNT(VENTILATION) as countVENTILATION2 FROM mess WHERE VENTILATION = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION8))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION2 = $row["countVENTILATION2"];
	}
}
$VENTILATION9 = "SELECT COUNT(MENU) as countVENTILATION3 FROM mess WHERE VENTILATION = 3 and  dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION9))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION3 = $row["countVENTILATION3"];
	}
}
$VENTILATION10 = "SELECT COUNT(VENTILATION) as countVENTILATION4 FROM mess WHERE VENTILATION = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION10))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION4 = $row["countVENTILATION4"];
	}
}
$VENTILATION11 = "SELECT COUNT(VENTILATION) as countVENTILATION5 FROM mess WHERE VENTILATION = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($VENTILATION11))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION5 = $row["countVENTILATION5"];
	}
}






$HYGIENE1 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgHYGIENE1 FROM mess WHERE HYGIENE = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE1 = $row["avgHYGIENE1"];
	
	}
}
$HYGIENE2 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgHYGIENE2 FROM mess WHERE HYGIENE = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE2 = $row["avgHYGIENE2"];

	}
}
$HYGIENE3 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgHYGIENE3 FROM mess WHERE HYGIENE = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE3 = $row["avgHYGIENE3"];

	}
}
$HYGIENE4 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgHYGIENE4 FROM mess WHERE HYGIENE = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE4 = $row["avgHYGIENE4"];

	}
}
$HYGIENE5 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM mess WHERE HYGIENE = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE5 = $row["avg"];

	}
}


$HYGIENE6 = "SELECT COUNT(HYGIENE) as countHYGIENE FROM mess where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE6))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE = $row["countHYGIENE"];
	}
}


$HYGIENE7 = "SELECT COUNT(HYGIENE) as countHYGIENE1 FROM mess WHERE HYGIENE = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE7))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE1 = $row["countHYGIENE1"];
	}
}

$HYGIENE8 = "SELECT COUNT(HYGIENE) as countHYGIENE2 FROM mess WHERE HYGIENE = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE8))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE2 = $row["countHYGIENE2"];
	}
}
$HYGIENE9 = "SELECT COUNT(MENU) as countHYGIENE3 FROM mess WHERE HYGIENE = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE9))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE3 = $row["countHYGIENE3"];
	}
}
$HYGIENE10 = "SELECT COUNT(HYGIENE) as countHYGIENE4 FROM mess WHERE HYGIENE = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE10))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE4 = $row["countHYGIENE4"];
	}
}
$HYGIENE11 = "SELECT COUNT(HYGIENE) as countHYGIENE5 FROM mess WHERE HYGIENE = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HYGIENE11))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE5 = $row["countHYGIENE5"];
	}
}



$STAFF1 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgSTAFF1 FROM mess WHERE STAFF = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF1 = $row["avgSTAFF1"];
	
	}
}
$STAFF2 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgSTAFF2 FROM mess WHERE STAFF = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF2 = $row["avgSTAFF2"];

	}
}
$STAFF3 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgSTAFF3 FROM mess WHERE STAFF = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF3 = $row["avgSTAFF3"];

	}
}
$STAFF4 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgSTAFF4 FROM mess WHERE STAFF = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF4 = $row["avgSTAFF4"];

	}
}
$STAFF5 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM mess WHERE STAFF = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF5 = $row["avg"];

	}
}


$STAFF6 = "SELECT COUNT(STAFF) as countSTAFF FROM mess where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF6))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF = $row["countSTAFF"];
	}
}


$STAFF7 = "SELECT COUNT(STAFF) as countSTAFF1 FROM mess WHERE STAFF = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF7))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF1 = $row["countSTAFF1"];
	}
}

$STAFF8 = "SELECT COUNT(STAFF) as countSTAFF2 FROM mess WHERE STAFF = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF8))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF2 = $row["countSTAFF2"];
	}
}
$STAFF9 = "SELECT COUNT(MENU) as countSTAFF3 FROM mess WHERE STAFF = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF9))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF3 = $row["countSTAFF3"];
	}
}
$STAFF10 = "SELECT COUNT(STAFF) as countSTAFF4 FROM mess WHERE STAFF = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF10))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF4 = $row["countSTAFF4"];
	}
}
$STAFF11 = "SELECT COUNT(STAFF) as countSTAFF5 FROM mess WHERE STAFF = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($STAFF11))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF5 = $row["countSTAFF5"];
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 800px; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.barmess-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.barmess1-5 {width: <?php echo $avgFOOD5; ?>%; height: 18px; background-color: #4CAF50;}
.barmess1-4 {width: <?php echo $avgFOOD4; ?>%; height: 18px; background-color: #2196F3;}
.barmess1-3 {width: <?php echo $avgFOOD3; ?>%; height: 18px; background-color: #00bcd4;}
.barmess1-2 {width: <?php echo $avgFOOD2; ?>%; height: 18px; background-color: #ff9800;}
.barmess1-1 {width: <?php echo $avgFOOD1; ?>%; height: 18px; background-color: #f44336;}

.barmess2-5 {width: <?php echo $avgWATER5; ?>%; height: 18px; background-color: #4CAF50;}
.barmess2-4 {width: <?php echo $avgWATER4; ?>%; height: 18px; background-color: #2196F3;}
.barmess2-3 {width: <?php echo $avgWATER3; ?>%; height: 18px; background-color: #00bcd4;}
.barmess2-2 {width: <?php echo $avgWATER2; ?>%; height: 18px; background-color: #ff9800;}
.barmess2-1 {width: <?php echo $avgWATER1; ?>%; height: 18px; background-color: #f44336;}

.barmess3-5 {width: <?php echo $avgMENU5; ?>%; height: 18px; background-color: #4CAF50;}
.barmess3-4 {width: <?php echo $avgMENU4; ?>%; height: 18px; background-color: #2196F3;}
.barmess3-3 {width: <?php echo $avgMENU3; ?>%; height: 18px; background-color: #00bcd4;}
.barmess3-2 {width: <?php echo $avgMENU2; ?>%; height: 18px; background-color: #ff9800;}
.barmess3-1 {width: <?php echo $avgMENU1; ?>%; height: 18px; background-color: #f44336;}

.barmess4-5 {width: <?php echo $avgTIME5; ?>%; height: 18px; background-color: #4CAF50;}
.barmess4-4 {width: <?php echo $avgTIME4; ?>%; height: 18px; background-color: #2196F3;}
.barmess4-3 {width: <?php echo $avgTIME3; ?>%; height: 18px; background-color: #00bcd4;}
.barmess4-2 {width: <?php echo $avgTIME2; ?>%; height: 18px; background-color: #ff9800;}
.barmess4-1 {width: <?php echo $avgTIME1; ?>%; height: 18px; background-color: #f44336;}

.barmess5-5 {width: <?php echo $avgVENTILATION5; ?>%; height: 18px; background-color: #4CAF50;}
.barmess5-4 {width: <?php echo $avgVENTILATION4; ?>%; height: 18px; background-color: #2196F3;}
.barmess5-3 {width: <?php echo $avgVENTILATION3; ?>%; height: 18px; background-color: #00bcd4;}
.barmess5-2 {width: <?php echo $avgVENTILATION2; ?>%; height: 18px; background-color: #ff9800;}
.barmess5-1 {width: <?php echo $avgVENTILATION1; ?>%; height: 18px; background-color: #f44336;}

.barmess6-5 {width: <?php echo $avgHYGIENE5; ?>%; height: 18px; background-color: #4CAF50;}
.barmess6-4 {width: <?php echo $avgHYGIENE4; ?>%; height: 18px; background-color: #2196F3;}
.barmess6-3 {width: <?php echo $avgHYGIENE3; ?>%; height: 18px; background-color: #00bcd4;}
.barmess6-2 {width: <?php echo $avgHYGIENE2; ?>%; height: 18px; background-color: #ff9800;}
.barmess6-1 {width: <?php echo $avgHYGIENE1; ?>%; height: 18px; background-color: #f44336;}


.barmess7-5 {width: <?php echo $avgSTAFF5; ?>%; height: 18px; background-color: #4CAF50;}
.barmess7-4 {width: <?php echo $avgSTAFF4; ?>%; height: 18px; background-color: #2196F3;}
.barmess7-3 {width: <?php echo $avgSTAFF3; ?>%; height: 18px; background-color: #00bcd4;}
.barmess7-2 {width: <?php echo $avgSTAFF2; ?>%; height: 18px; background-color: #ff9800;}
.barmess7-1 {width: <?php echo $avgSTAFF1; ?>%; height: 18px; background-color: #f44336;}



/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>
</head>
<body>
<center><span class="heading"><h3>MESS REVIEWS</h3></span></center>

<span class="heading"><center><?php echo "DEPT:&nbsp;",$dept,"&nbsp;&nbsp; YEAR:&nbsp;",$year,"&nbsp;&nbsp; SEC:&nbsp;",$sec;?></center><br></span>

<span class="heading">1.FOOD rating</span>

<p> average based on <?php echo $totcountFOOD; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFOOD5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFOOD4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFOOD3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFOOD2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFOOD1; ?></div>
  </div>
</div>

<span class="heading">2.WATER rating</span>

<p> average based on <?php echo $totcountWATER; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountWATER5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountWATER4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountWATER3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountWATER2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountWATER1; ?></div>
  </div>
</div>



<span class="heading">3.MENU rating</span>

<p> average based on <?php echo $totcountMENU; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMENU5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMENU4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMENU3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMENU2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMENU1; ?></div>
  </div>
</div>



<span class="heading">4.TIME  rating</span>

<p> average based on <?php echo $totcountTIME; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess4-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME1; ?></div>
  </div>
</div>


<span class="heading">5.VENTILATION  rating</span>

<p> average based on <?php echo $totcountVENTILATION; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION1; ?></div>
  </div>
</div>



<span class="heading">6.HYGIENE rating</span>

<p> average based on <?php echo $totcountHYGIENE; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess6-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHYGIENE5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess6-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHYGIENE4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess6-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHYGIENE3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess6-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHYGIENE2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess6-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHYGIENE1; ?></div>
  </div>
</div>





<span class="heading">7.STAFF  rating</span>

<p> average based on <?php echo $totcountSTAFF; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess7-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess7-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess7-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess7-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barmess-container">
      <div class="barmess7-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF1; ?></div>
  </div>
</div>


<center><span class="heading"><h3>Top Comments(4 Stars & above)</h3></span></center>
<?php 
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f = "SELECT feedback as feed FROM mess WHERE FOOD>3 or WATER>3 or MENU>3 or TIME>3 or VENTILATION>3 or HYGIENE>3 or STAFF>3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f)) {
	
    while ($row = $result->fetch_assoc()) {
			$topfeed = $row["feed"];
			echo "Comments   :",$topfeed,"<br>";
	}
}

?>

<center><span class="heading"><h3>Bad Comments(3 Stars & below)</h3></span></center>
<?php 

$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f1 = "SELECT feedback as feed FROM mess WHERE FOOD<3 or WATER<3 or MENU<3 or TIME<3 or VENTILATION<3 or HYGIENE<3 or STAFF<3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f1)) {
	
    while ($row = $result->fetch_assoc()) {
			$worstfeed = $row["feed"];
			echo "Comments   :",$worstfeed,"<br>";
	}
}
?>


</body>
</html>