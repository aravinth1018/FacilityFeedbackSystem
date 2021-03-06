<?php
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM hostel";

 



$Accommodation1 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year')*100 as avgAccommodation1 FROM hostel WHERE Accommodation = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation1 = $row["avgAccommodation1"];
	
	}
}
$Accommodation2 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgAccommodation2 FROM hostel WHERE Accommodation = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation2 = $row["avgAccommodation2"];

	}
}
$Accommodation3 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgAccommodation3 FROM hostel WHERE Accommodation = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation3 = $row["avgAccommodation3"];

	}
}
$Accommodation4 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgAccommodation4 FROM hostel WHERE Accommodation = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation4 = $row["avgAccommodation4"];

	}
}
$Accommodation5 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avg FROM hostel WHERE Accommodation = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation5 = $row["avg"];

	}
}


$Accommodation6 = "SELECT COUNT(Accommodation) as countAccommodation FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation6))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation = $row["countAccommodation"];
	}
}


$Accommodation7 = "SELECT COUNT(Accommodation) as countAccommodation1 FROM hostel WHERE Accommodation = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation7))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation1 = $row["countAccommodation1"];
	}
}

$Accommodation8 = "SELECT COUNT(Accommodation) as countAccommodation2 FROM hostel WHERE Accommodation = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation8))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation2 = $row["countAccommodation2"];
	}
}
$Accommodation9 = "SELECT COUNT(Accommodation) as countAccommodation3 FROM hostel WHERE Accommodation = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation9))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation3 = $row["countAccommodation3"];
	}
}
$Accommodation10 = "SELECT COUNT(Accommodation) as countAccommodation4 FROM hostel WHERE Accommodation = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation10))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation4 = $row["countAccommodation4"];
	}
}
$Accommodation11 = "SELECT COUNT(Accommodation) as countAccommodation5 FROM hostel WHERE Accommodation = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Accommodation11))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation5 = $row["countAccommodation5"];
	}
}




 $YOGA1 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year')*100 as avgYOGA1 FROM hostel WHERE YOGA = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA1 = $row["avgYOGA1"];
	
	}
}
$YOGA2 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgYOGA2 FROM hostel WHERE YOGA = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA2 = $row["avgYOGA2"];

	}
}
$YOGA3 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgYOGA3 FROM hostel WHERE YOGA = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA3 = $row["avgYOGA3"];

	}
}
$YOGA4 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgYOGA4 FROM hostel WHERE YOGA = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA4 = $row["avgYOGA4"];

	}
}
$YOGA5 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avg FROM hostel WHERE YOGA = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA5 = $row["avg"];

	}
}


$YOGA6 = "SELECT COUNT(YOGA) as countYOGA FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA6))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA = $row["countYOGA"];
	}
}


$YOGA7 = "SELECT COUNT(YOGA) as countYOGA1 FROM hostel WHERE YOGA = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA7))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA1 = $row["countYOGA1"];
	}
}

$YOGA8 = "SELECT COUNT(YOGA) as countYOGA2 FROM hostel WHERE YOGA = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA8))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA2 = $row["countYOGA2"];
	}
}
$YOGA9 = "SELECT COUNT(YOGA) as countYOGA3 FROM hostel WHERE YOGA = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA9))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA3 = $row["countYOGA3"];
	}
}
$YOGA10 = "SELECT COUNT(YOGA) as countYOGA4 FROM hostel WHERE YOGA = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA10))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA4 = $row["countYOGA4"];
	}
}
$YOGA11 = "SELECT COUNT(YOGA) as countYOGA5 FROM hostel WHERE YOGA = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($YOGA11))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA5 = $row["countYOGA5"];
	}
}





 $Telephone1 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year')*100 as avgTelephone1 FROM hostel WHERE Telephone = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone1 = $row["avgTelephone1"];
	
	}
}
$Telephone2 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgTelephone2 FROM hostel WHERE Telephone = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone2 = $row["avgTelephone2"];

	}
}
$Telephone3 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgTelephone3 FROM hostel WHERE Telephone = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone3 = $row["avgTelephone3"];

	}
}
$Telephone4 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgTelephone4 FROM hostel WHERE Telephone = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone4 = $row["avgTelephone4"];

	}
}
$Telephone5 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avg FROM hostel WHERE Telephone = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone5 = $row["avg"];

	}
}


$Telephone6 = "SELECT COUNT(Telephone) as countTelephone FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone6))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone = $row["countTelephone"];
	}
}


$Telephone7 = "SELECT COUNT(Telephone) as countTelephone1 FROM hostel WHERE Telephone = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone7))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone1 = $row["countTelephone1"];
	}
}

$Telephone8 = "SELECT COUNT(Telephone) as countTelephone2 FROM hostel WHERE Telephone = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone8))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone2 = $row["countTelephone2"];
	}
}
$Telephone9 = "SELECT COUNT(Telephone) as countTelephone3 FROM hostel WHERE Telephone = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone9))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone3 = $row["countTelephone3"];
	}
}
$Telephone10 = "SELECT COUNT(Telephone) as countTelephone4 FROM hostel WHERE Telephone = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone10))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone4 = $row["countTelephone4"];
	}
}
$Telephone11 = "SELECT COUNT(Telephone) as countTelephone5 FROM hostel WHERE Telephone = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Telephone11))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone5 = $row["countTelephone5"];
	}
}



 $Medical1 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year')*100 as avgMedical1 FROM hostel WHERE Medical = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical1 = $row["avgMedical1"];
	
	}
}
$Medical2 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgMedical2 FROM hostel WHERE Medical = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical2 = $row["avgMedical2"];

	}
}
$Medical3 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgMedical3 FROM hostel WHERE Medical = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical3 = $row["avgMedical3"];

	}
}
$Medical4 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgMedical4 FROM hostel WHERE Medical = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical4 = $row["avgMedical4"];

	}
}
$Medical5 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avg FROM hostel WHERE Medical = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical5 = $row["avg"];

	}
}


$Medical6 = "SELECT COUNT(Medical) as countMedical FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical6))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical = $row["countMedical"];
	}
}


$Medical7 = "SELECT COUNT(Medical) as countMedical1 FROM hostel WHERE Medical = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical7))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical1 = $row["countMedical1"];
	}
}

$Medical8 = "SELECT COUNT(Medical) as countMedical2 FROM hostel WHERE Medical = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical8))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical2 = $row["countMedical2"];
	}
}
$Medical9 = "SELECT COUNT(Medical) as countMedical3 FROM hostel WHERE Medical = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical9))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical3 = $row["countMedical3"];
	}
}
$Medical10 = "SELECT COUNT(Medical) as countMedical4 FROM hostel WHERE Medical = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical10))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical4 = $row["countMedical4"];
	}
}
$Medical11 = "SELECT COUNT(Medical) as countMedical5 FROM hostel WHERE Medical = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Medical11))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical5 = $row["countMedical5"];
	}
}



$LAB1 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year')*100 as avgLAB1 FROM hostel WHERE LAB = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB1 = $row["avgLAB1"];
	
	}
}
$LAB2 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgLAB2 FROM hostel WHERE LAB = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB2 = $row["avgLAB2"];

	}
}
$LAB3 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgLAB3 FROM hostel WHERE LAB = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB3 = $row["avgLAB3"];

	}
}
$LAB4 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgLAB4 FROM hostel WHERE LAB = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB4 = $row["avgLAB4"];

	}
}
$LAB5 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avg FROM hostel WHERE LAB = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB5 = $row["avg"];

	}
}


$LAB6 = "SELECT COUNT(LAB) as countLAB FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB6))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB = $row["countLAB"];
	}
}


$LAB7 = "SELECT COUNT(LAB) as countLAB1 FROM hostel WHERE LAB = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB7))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB1 = $row["countLAB1"];
	}
}

$LAB8 = "SELECT COUNT(LAB) as countLAB2 FROM hostel WHERE LAB = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB8))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB2 = $row["countLAB2"];
	}
}
$LAB9 = "SELECT COUNT(Telephone) as countLAB3 FROM hostel WHERE LAB = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB9))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB3 = $row["countLAB3"];
	}
}
$LAB10 = "SELECT COUNT(LAB) as countLAB4 FROM hostel WHERE LAB = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB10))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB4 = $row["countLAB4"];
	}
}
$LAB11 = "SELECT COUNT(LAB) as countLAB5 FROM hostel WHERE LAB = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($LAB11))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB5 = $row["countLAB5"];
	}
}






$Laundry1 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year')*100 as avgLaundry1 FROM hostel WHERE Laundry = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry1 = $row["avgLaundry1"];
	
	}
}
$Laundry2 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgLaundry2 FROM hostel WHERE Laundry = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry2 = $row["avgLaundry2"];

	}
}
$Laundry3 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgLaundry3 FROM hostel WHERE Laundry = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry3 = $row["avgLaundry3"];

	}
}
$Laundry4 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgLaundry4 FROM hostel WHERE Laundry = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry4 = $row["avgLaundry4"];

	}
}
$Laundry5 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avg FROM hostel WHERE Laundry = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry5 = $row["avg"];

	}
}


$Laundry6 = "SELECT COUNT(Laundry) as countLaundry FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry6))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry = $row["countLaundry"];
	}
}


$Laundry7 = "SELECT COUNT(Laundry) as countLaundry1 FROM hostel WHERE Laundry = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry7))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry1 = $row["countLaundry1"];
	}
}

$Laundry8 = "SELECT COUNT(Laundry) as countLaundry2 FROM hostel WHERE Laundry = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry8))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry2 = $row["countLaundry2"];
	}
}
$Laundry9 = "SELECT COUNT(Telephone) as countLaundry3 FROM hostel WHERE Laundry = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry9))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry3 = $row["countLaundry3"];
	}
}
$Laundry10 = "SELECT COUNT(Laundry) as countLaundry4 FROM hostel WHERE Laundry = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry10))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry4 = $row["countLaundry4"];
	}
}
$Laundry11 = "SELECT COUNT(Laundry) as countLaundry5 FROM hostel WHERE Laundry = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Laundry11))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry5 = $row["countLaundry5"];
	}
}



$Stationary1 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year')*100 as avgStationary1 FROM hostel WHERE Stationary = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary1 = $row["avgStationary1"];
	
	}
}
$Stationary2 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgStationary2 FROM hostel WHERE Stationary = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary2 = $row["avgStationary2"];

	}
}
$Stationary3 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgStationary3 FROM hostel WHERE Stationary = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary3 = $row["avgStationary3"];

	}
}
$Stationary4 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgStationary4 FROM hostel WHERE Stationary = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary4 = $row["avgStationary4"];

	}
}
$Stationary5 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avg FROM hostel WHERE Stationary = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary5 = $row["avg"];

	}
}


$Stationary6 = "SELECT COUNT(Stationary) as countStationary FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary6))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary = $row["countStationary"];
	}
}


$Stationary7 = "SELECT COUNT(Stationary) as countStationary1 FROM hostel WHERE Stationary = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary7))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary1 = $row["countStationary1"];
	}
}

$Stationary8 = "SELECT COUNT(Stationary) as countStationary2 FROM hostel WHERE Stationary = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary8))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary2 = $row["countStationary2"];
	}
}
$Stationary9 = "SELECT COUNT(Telephone) as countStationary3 FROM hostel WHERE Stationary = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary9))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary3 = $row["countStationary3"];
	}
}
$Stationary10 = "SELECT COUNT(Stationary) as countStationary4 FROM hostel WHERE Stationary = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary10))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary4 = $row["countStationary4"];
	}
}
$Stationary11 = "SELECT COUNT(Stationary) as countStationary5 FROM hostel WHERE Stationary = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Stationary11))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary5 = $row["countStationary5"];
	}
}




$Games1 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year')*100 as avgGames1 FROM hostel WHERE Games = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames1 = $row["avgGames1"];
	
	}
}
$Games2 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgGames2 FROM hostel WHERE Games = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames2 = $row["avgGames2"];

	}
}
$Games3 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgGames3 FROM hostel WHERE Games = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames3 = $row["avgGames3"];

	}
}
$Games4 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avgGames4 FROM hostel WHERE Games = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames4 = $row["avgGames4"];

	}
}
$Games5 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year') *100 as avg FROM hostel WHERE Games = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames5 = $row["avg"];

	}
}


$Games6 = "SELECT COUNT(Games) as countGames FROM hostel where dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games6))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames = $row["countGames"];
	}
}


$Games7 = "SELECT COUNT(Games) as countGames1 FROM hostel WHERE Games = 1 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games7))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames1 = $row["countGames1"];
	}
}

$Games8 = "SELECT COUNT(Games) as countGames2 FROM hostel WHERE Games = 2 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games8))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames2 = $row["countGames2"];
	}
}
$Games9 = "SELECT COUNT(Telephone) as countGames3 FROM hostel WHERE Games = 3 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games9))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames3 = $row["countGames3"];
	}
}
$Games10 = "SELECT COUNT(Games) as countGames4 FROM hostel WHERE Games = 4 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games10))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames4 = $row["countGames4"];
	}
}
$Games11 = "SELECT COUNT(Games) as countGames5 FROM hostel WHERE Games = 5 and dept ='$dept' and sec ='$sec' and year = '$year'";

if ($result = $mysqli->query($Games11))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames5 = $row["countGames5"];
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
.barhos-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.barhos1-5 {width: <?php echo $avgAccommodation5; ?>%; height: 18px; background-color: #4CAF50;}
.barhos1-4 {width: <?php echo $avgAccommodation4; ?>%; height: 18px; background-color: #2196F3;}
.barhos1-3 {width: <?php echo $avgAccommodation3; ?>%; height: 18px; background-color: #00bcd4;}
.barhos1-2 {width: <?php echo $avgAccommodation2; ?>%; height: 18px; background-color: #ff9800;}
.barhos1-1 {width: <?php echo $avgAccommodation1; ?>%; height: 18px; background-color: #f44336;}

.barhos2-5 {width: <?php echo $avgYOGA5; ?>%; height: 18px; background-color: #4CAF50;}
.barhos2-4 {width: <?php echo $avgYOGA4; ?>%; height: 18px; background-color: #2196F3;}
.barhos2-3 {width: <?php echo $avgYOGA3; ?>%; height: 18px; background-color: #00bcd4;}
.barhos2-2 {width: <?php echo $avgYOGA2; ?>%; height: 18px; background-color: #ff9800;}
.barhos2-1 {width: <?php echo $avgYOGA1; ?>%; height: 18px; background-color: #f44336;}

.barhos3-5 {width: <?php echo $avgTelephone5; ?>%; height: 18px; background-color: #4CAF50;}
.barhos3-4 {width: <?php echo $avgTelephone4; ?>%; height: 18px; background-color: #2196F3;}
.barhos3-3 {width: <?php echo $avgTelephone3; ?>%; height: 18px; background-color: #00bcd4;}
.barhos3-2 {width: <?php echo $avgTelephone2; ?>%; height: 18px; background-color: #ff9800;}
.barhos3-1 {width: <?php echo $avgTelephone1; ?>%; height: 18px; background-color: #f44336;}

.barhos4-5 {width: <?php echo $avgMedical5; ?>%; height: 18px; background-color: #4CAF50;}
.barhos4-4 {width: <?php echo $avgMedical4; ?>%; height: 18px; background-color: #2196F3;}
.barhos4-3 {width: <?php echo $avgMedical3; ?>%; height: 18px; background-color: #00bcd4;}
.barhos4-2 {width: <?php echo $avgMedical2; ?>%; height: 18px; background-color: #ff9800;}
.barhos4-1 {width: <?php echo $avgMedical1; ?>%; height: 18px; background-color: #f44336;}

.barhos5-5 {width: <?php echo $avgLAB5; ?>%; height: 18px; background-color: #4CAF50;}
.barhos5-4 {width: <?php echo $avgLAB4; ?>%; height: 18px; background-color: #2196F3;}
.barhos5-3 {width: <?php echo $avgLAB3; ?>%; height: 18px; background-color: #00bcd4;}
.barhos5-2 {width: <?php echo $avgLAB2; ?>%; height: 18px; background-color: #ff9800;}
.barhos5-1 {width: <?php echo $avgLAB1; ?>%; height: 18px; background-color: #f44336;}

.barhos6-5 {width: <?php echo $avgLaundry5; ?>%; height: 18px; background-color: #4CAF50;}
.barhos6-4 {width: <?php echo $avgLaundry4; ?>%; height: 18px; background-color: #2196F3;}
.barhos6-3 {width: <?php echo $avgLaundry3; ?>%; height: 18px; background-color: #00bcd4;}
.barhos6-2 {width: <?php echo $avgLaundry2; ?>%; height: 18px; background-color: #ff9800;}
.barhos6-1 {width: <?php echo $avgLaundry1; ?>%; height: 18px; background-color: #f44336;}


.barhos7-5 {width: <?php echo $avgStationary5; ?>%; height: 18px; background-color: #4CAF50;}
.barhos7-4 {width: <?php echo $avgStationary4; ?>%; height: 18px; background-color: #2196F3;}
.barhos7-3 {width: <?php echo $avgStationary3; ?>%; height: 18px; background-color: #00bcd4;}
.barhos7-2 {width: <?php echo $avgStationary2; ?>%; height: 18px; background-color: #ff9800;}
.barhos7-1 {width: <?php echo $avgStationary1; ?>%; height: 18px; background-color: #f44336;}





.barhos8-5 {width: <?php echo $avgGames5; ?>%; height: 18px; background-color: #4CAF50;}
.barhos8-4 {width: <?php echo $avgGames4; ?>%; height: 18px; background-color: #2196F3;}
.barhos8-3 {width: <?php echo $avgGames3; ?>%; height: 18px; background-color: #00bcd4;}
.barhos8-2 {width: <?php echo $avgGames2; ?>%; height: 18px; background-color: #ff9800;}
.barhos8-1 {width: <?php echo $avgGames1; ?>%; height: 18px; background-color: #f44336;}


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
<center><span class="heading"><h3>HOSTEL REVIEWS</h3></span></center>
<span class="heading"><center><?php echo "DEPT:&nbsp;",$dept,"&nbsp;&nbsp; YEAR:&nbsp;",$year,"&nbsp;&nbsp; SEC:&nbsp;",$sec;?></center><br></span>

<span class="heading">1.Accommodation rating</span>

<p> average based on <?php echo $totcountAccommodation; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountAccommodation5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountAccommodation4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountAccommodation3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountAccommodation2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountAccommodation1; ?></div>
  </div>
</div>

<span class="heading">2.yoga rating</span>

<p> average based on <?php echo $totcountYOGA; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountYOGA5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountYOGA4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountYOGA3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountYOGA2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountYOGA1; ?></div>
  </div>
</div>



<span class="heading">3.Telephone rating</span>

<p> average based on <?php echo $totcountTelephone; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTelephone5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTelephone4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTelephone3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTelephone2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTelephone1; ?></div>
  </div>
</div>



<span class="heading">4.Medical  rating</span>

<p> average based on <?php echo $totcountMedical; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMedical5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMedical4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMedical3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMedical2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos4-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMedical1; ?></div>
  </div>
</div>


<span class="heading">4.LAB  rating</span>

<p> average based on <?php echo $totcountLAB; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLAB5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLAB4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLAB3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLAB2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLAB1; ?></div>
  </div>
</div>



<span class="heading">5.Laundry rating</span>

<p> average based on <?php echo $totcountLaundry; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLaundry5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLaundry4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLaundry3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLaundry2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLaundry1; ?></div>
  </div>
</div>





<span class="heading">7.Stationary  rating</span>

<p> average based on <?php echo $totcountStationary; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountStationary5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountStationary4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountStationary3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountStationary2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountStationary1; ?></div>
  </div>
</div>



<span class="heading">8.Games  rating</span>

<p> average based on <?php echo $totcountGames; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barhos-container">
      <div class="barhos5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames1; ?></div>
  </div>
</div>


<center><span class="heading"><h3>Top Comments(4 Stars & above)</h3></span></center>
<?php 
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f = "SELECT feedback as feed FROM hostel WHERE Accommodation>3 or YOGA>3 or Telephone>3 or Medical>3 or LAB>3 or Laundry>3 or Stationary>3 or Games>3 and dept = '$dept' and sec = '$sec' and year = '$year'";

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

$f1 = "SELECT feedback as feed FROM hostel WHERE Accommodation<3 or YOGA<3 or Telephone<3 or Medical<3 or LAB<3 or Laundry<3 or Stationary<3 or Games<3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f1)) {
	
    while ($row = $result->fetch_assoc()) {
			$worstfeed = $row["feed"];
			echo "Comments   :",$worstfeed,"<br>";
	}
}



?>




</body>
</html>