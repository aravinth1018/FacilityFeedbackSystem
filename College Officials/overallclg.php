<?php

$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);


 $cb1 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus)*100 as avgh1 FROM bus WHERE bus = 1";

if ($result = $mysqli->query($cb1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbus1 = $row["avgh1"];
	
	}
}
$cb2 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus) *100 as avgh2 FROM bus WHERE bus = 2";

if ($result = $mysqli->query($cb2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbus2 = $row["avgh2"];

	}
}
$cb3 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus) *100 as avgh3 FROM bus WHERE bus = 3";

if ($result = $mysqli->query($cb3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbus3 = $row["avgh3"];

	}
}
$cb4 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus) *100 as avgh4 FROM bus WHERE bus = 4";

if ($result = $mysqli->query($cb4)) {

    while ($row = $result->fetch_assoc()) {
			$avgbus4 = $row["avgh4"];

	}
}
$cb5 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus) *100 as avg FROM bus WHERE bus = 5";

if ($result = $mysqli->query($cb5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbus5 = $row["avg"];

	}
}


$cb6 = "SELECT COUNT(bus) as counth FROM bus";

if ($result = $mysqli->query($cb6))
{
	while ($row = $result->fetch_assoc()){
			$totcountb = $row["counth"];
	}
}


$cb7 = "SELECT COUNT(bus) as counth1 FROM bus WHERE bus = 1";

if ($result = $mysqli->query($cb7))
{
	while ($row = $result->fetch_assoc()){
			$totcountb1 = $row["counth1"];
	}
}

$cb8 = "SELECT COUNT(bus) as counth2 FROM bus WHERE bus = 2";

if ($result = $mysqli->query($cb8))
{
	while ($row = $result->fetch_assoc()){
			$totcountb2 = $row["counth2"];
	}
}
$cb9 = "SELECT COUNT(bus) as counth3 FROM bus WHERE bus = 3";

if ($result = $mysqli->query($cb9))
{
	while ($row = $result->fetch_assoc()){
			$totcountb3 = $row["counth3"];
	}
}
$cb10 = "SELECT COUNT(bus) as counth4 FROM bus WHERE bus = 4";

if ($result = $mysqli->query($cb10))
{
	while ($row = $result->fetch_assoc()){
			$totcountb4 = $row["counth4"];
	}
}
$cb11 = "SELECT COUNT(bus) as counth5 FROM bus WHERE bus = 5";

if ($result = $mysqli->query($cb11))
{
	while ($row = $result->fetch_assoc()){
			$totcountb5 = $row["counth5"];
	}
}


$cj1 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus)*100 as avgh1 FROM bus WHERE seat = 1";

if ($result = $mysqli->query($cj1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgseat1 = $row["avgh1"];
	
	}
}
$cj2 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus) *100 as avgh2 FROM bus WHERE seat = 2";

if ($result = $mysqli->query($cj2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgseat2 = $row["avgh2"];

	}
}
$cj3 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus) *100 as avgh3 FROM bus WHERE seat = 3";

if ($result = $mysqli->query($cj3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgseat3 = $row["avgh3"];

	}
}
$cj4 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus) *100 as avgh4 FROM bus WHERE seat = 4";

if ($result = $mysqli->query($cj4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgseat4 = $row["avgh4"];

	}
}
$cj5 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus) *100 as avg FROM bus WHERE seat = 5";

if ($result = $mysqli->query($cj5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgseat5 = $row["avg"];

	}
}



$cj6 = "SELECT COUNT(seat) as counth FROM bus";

if ($result = $mysqli->query($cj6))
{
	while ($row = $result->fetch_assoc()){
			$totcountj = $row["counth"];
	}
}


$cj7 = "SELECT COUNT(seat) as counth1 FROM bus WHERE seat = 1";

if ($result = $mysqli->query($cj7))
{
	while ($row = $result->fetch_assoc()){
			$totcountj1 = $row["counth1"];
	}
}

$cj8 = "SELECT COUNT(seat) as counth2 FROM bus WHERE seat = 2";

if ($result = $mysqli->query($cj8))
{
	while ($row = $result->fetch_assoc()){
			$totcountj2 = $row["counth2"];
	}
}
$cj9 = "SELECT COUNT(seat) as counth3 FROM bus WHERE seat = 3";

if ($result = $mysqli->query($cj9))
{
	while ($row = $result->fetch_assoc()){
			$totcountj3 = $row["counth3"];
	}
}
$cj10 = "SELECT COUNT(seat) as counth4 FROM bus WHERE seat = 4";

if ($result = $mysqli->query($cj10))
{
	while ($row = $result->fetch_assoc()){
			$totcountj4 = $row["counth4"];
	}
}
$cj11 = "SELECT COUNT(seat) as counth5 FROM bus WHERE seat = 5";

if ($result = $mysqli->query($cj11))
{
	while ($row = $result->fetch_assoc()){
			$totcountj5 = $row["counth5"];
	}
}



$cm1 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus)*100 as avgh1 FROM bus WHERE busc = 1";

if ($result = $mysqli->query($cm1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbc1 = $row["avgh1"];
	
	}
}
$cm2 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus) *100 as avgh2 FROM bus WHERE busc = 2";

if ($result = $mysqli->query($cm2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbc2 = $row["avgh2"];

	}
}
$cm3 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus) *100 as avgh3 FROM bus WHERE busc = 3";

if ($result = $mysqli->query($cm3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbc3 = $row["avgh3"];

	}
}
$cm4 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus) *100 as avgh4 FROM bus WHERE busc = 4";

if ($result = $mysqli->query($cm4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbc4 = $row["avgh4"];

	}
}
$cm5 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus) *100 as avg FROM bus WHERE busc = 5";

if ($result = $mysqli->query($cm5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbc5 = $row["avg"];

	}
}



$cm6 = "SELECT COUNT(busc) as counth FROM bus";

if ($result = $mysqli->query($cm6))
{
	while ($row = $result->fetch_assoc()){
			$totcountm = $row["counth"];
	}
}


$cm7 = "SELECT COUNT(busc) as counth1 FROM bus WHERE busc = 1";

if ($result = $mysqli->query($cm7))
{
	while ($row = $result->fetch_assoc()){
			$totcountm1 = $row["counth1"];
	}
}

$cm8 = "SELECT COUNT(busc) as counth2 FROM bus WHERE busc = 2";

if ($result = $mysqli->query($cm8))
{
	while ($row = $result->fetch_assoc()){
			$totcountm2 = $row["counth2"];
	}
}
$cm9 = "SELECT COUNT(busc) as counth3 FROM bus WHERE busc = 3";

if ($result = $mysqli->query($cm9))
{
	while ($row = $result->fetch_assoc()){
			$totcountm3 = $row["counth3"];
	}
}
$cm10 = "SELECT COUNT(busc) as counth4 FROM bus WHERE busc = 4";

if ($result = $mysqli->query($cm10))
{
	while ($row = $result->fetch_assoc()){
			$totcountm4 = $row["counth4"];
	}
}
$cm11 = "SELECT COUNT(busc) as counth5 FROM bus WHERE busc = 5";

if ($result = $mysqli->query($cm11))
{
	while ($row = $result->fetch_assoc()){
			$totcountm5 = $row["counth5"];
	}
}


$cl1 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus)*100 as avgh1 FROM bus WHERE driver = 1";

if ($result = $mysqli->query($cl1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd1 = $row["avgh1"];
	
	}
}
$cl2 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus) *100 as avgh2 FROM bus WHERE driver = 2";

if ($result = $mysqli->query($cl2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd2 = $row["avgh2"];

	}
}
$cl3 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus) *100 as avgh3 FROM bus WHERE driver = 3";

if ($result = $mysqli->query($cl3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd3 = $row["avgh3"];

	}
}
$cl4 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus) *100 as avgh4 FROM bus WHERE driver = 4";

if ($result = $mysqli->query($cl4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd4 = $row["avgh4"];

	}
}
$cl5 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus) *100 as avg FROM bus WHERE driver = 5";

if ($result = $mysqli->query($cl5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd5 = $row["avg"];

	}
}

$cl6 = "SELECT COUNT(driver) as counth FROM bus";

if ($result = $mysqli->query($cl6))
{
	while ($row = $result->fetch_assoc()){
			$totcountl = $row["counth"];
	}
}


$cl7 = "SELECT COUNT(driver) as counth1 FROM bus WHERE driver = 1";

if ($result = $mysqli->query($cl7))
{
	while ($row = $result->fetch_assoc()){
			$totcountl1 = $row["counth1"];
	}
}

$cl8 = "SELECT COUNT(driver) as counth2 FROM bus WHERE driver = 2";

if ($result = $mysqli->query($cl8))
{
	while ($row = $result->fetch_assoc()){
			$totcountl2 = $row["counth2"];
	}
}
$cl9 = "SELECT COUNT(driver) as counth3 FROM bus WHERE driver = 3";

if ($result = $mysqli->query($cl9))
{
	while ($row = $result->fetch_assoc()){
			$totcountl3 = $row["counth3"];
	}
}
$cl10 = "SELECT COUNT(driver) as counth4 FROM bus WHERE driver = 4";

if ($result = $mysqli->query($cl10))
{
	while ($row = $result->fetch_assoc()){
			$totcountl4 = $row["counth4"];
	}
}
$cl11 = "SELECT COUNT(driver) as counth5 FROM bus WHERE driver = 5";

if ($result = $mysqli->query($cl11))
{
	while ($row = $result->fetch_assoc()){
			$totcountl5 = $row["counth5"];
	}
}




$HARD1 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing)*100 as avgHARD1 FROM computing WHERE HARD = 1";

if ($result = $mysqli->query($HARD1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD1 = $row["avgHARD1"];
	
	}
}
$HARD2 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing) *100 as avgHARD2 FROM computing WHERE HARD = 2";

if ($result = $mysqli->query($HARD2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD2 = $row["avgHARD2"];

	}
}
$HARD3 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing) *100 as avgHARD3 FROM computing WHERE HARD = 3";

if ($result = $mysqli->query($HARD3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD3 = $row["avgHARD3"];

	}
}
$HARD4 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing) *100 as avgHARD4 FROM computing WHERE HARD = 4";

if ($result = $mysqli->query($HARD4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD4 = $row["avgHARD4"];

	}
}
$HARD5 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing) *100 as avg FROM computing WHERE HARD = 5";

if ($result = $mysqli->query($HARD5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD5 = $row["avg"];

	}
}

$c6 = "SELECT COUNT(HARD) as counth FROM computing";

if ($result = $mysqli->query($c6))
{
	while ($row = $result->fetch_assoc()){
			$totcounth = $row["counth"];
	}
}


$c7 = "SELECT COUNT(HARD) as counth1 FROM computing WHERE HARD = 1";

if ($result = $mysqli->query($c7))
{
	while ($row = $result->fetch_assoc()){
			$totcounth1 = $row["counth1"];
	}
}

$c8 = "SELECT COUNT(HARD) as counth2 FROM computing WHERE HARD = 2";

if ($result = $mysqli->query($c8))
{
	while ($row = $result->fetch_assoc()){
			$totcounth2 = $row["counth2"];
	}
}
$c9 = "SELECT COUNT(HARD) as counth3 FROM computing WHERE HARD = 3";

if ($result = $mysqli->query($c9))
{
	while ($row = $result->fetch_assoc()){
			$totcounth3 = $row["counth3"];
	}
}
$c10 = "SELECT COUNT(HARD) as counth4 FROM computing WHERE HARD = 4";

if ($result = $mysqli->query($c10))
{
	while ($row = $result->fetch_assoc()){
			$totcounth4 = $row["counth4"];
	}
}
$c11 = "SELECT COUNT(HARD) as counth5 FROM computing WHERE HARD = 5";

if ($result = $mysqli->query($c11))
{
	while ($row = $result->fetch_assoc()){
			$totcounth5 = $row["counth5"];
	}
}






 $SOFT1 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing)*100 as avgSOFT1 FROM computing WHERE SOFT = 1";

if ($result = $mysqli->query($SOFT1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT1 = $row["avgSOFT1"];
	
	}
}
$SOFT2 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing) *100 as avgSOFT2 FROM computing WHERE SOFT = 2";

if ($result = $mysqli->query($SOFT2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT2 = $row["avgSOFT2"];

	}
}
$SOFT3 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing) *100 as avgSOFT3 FROM computing WHERE SOFT = 3";

if ($result = $mysqli->query($SOFT3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT3 = $row["avgSOFT3"];

	}
}
$SOFT4 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing) *100 as avgSOFT4 FROM computing WHERE SOFT = 4";

if ($result = $mysqli->query($SOFT4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT4 = $row["avgSOFT4"];

	}
}
$SOFT5 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing) *100 as avg FROM computing WHERE SOFT = 5";

if ($result = $mysqli->query($SOFT5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT5 = $row["avg"];

	}
}

$SOFT6 = "SELECT COUNT(SOFT) as countSOFT FROM computing";

if ($result = $mysqli->query($SOFT6))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT = $row["countSOFT"];
	}
}


$SOFT7 = "SELECT COUNT(SOFT) as countSOFT1 FROM computing WHERE HARD = 1 ";

if ($result = $mysqli->query($SOFT7))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT1 = $row["countSOFT1"];
	}
}

$SOFT8 = "SELECT COUNT(SOFT) as countSOFT2 FROM computing WHERE SOFT = 2 ";

if ($result = $mysqli->query($SOFT8))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT2 = $row["countSOFT2"];
	}
}
$SOFT9 = "SELECT COUNT(SOFT) as countSOFT3 FROM computing WHERE SOFT = 3 ";

if ($result = $mysqli->query($SOFT9))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT3 = $row["countSOFT3"];
	}
}
$SOFT10 = "SELECT COUNT(SOFT) as countSOFT4 FROM computing WHERE SOFT = 4";

if ($result = $mysqli->query($SOFT10))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT4 = $row["countSOFT4"];
	}
}
$SOFT11 = "SELECT COUNT(SOFT) as countSOFT5 FROM computing WHERE SOFT = 5";

if ($result = $mysqli->query($SOFT11))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT5 = $row["countSOFT5"];
	}
}





 $INTER1 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing)*100 as avgINTER1 FROM computing WHERE INTER = 1";

if ($result = $mysqli->query($INTER1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER1 = $row["avgINTER1"];
	
	}
}
$INTER2 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing) *100 as avgINTER2 FROM computing WHERE INTER = 2";

if ($result = $mysqli->query($INTER2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER2 = $row["avgINTER2"];

	}
}
$INTER3 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing) *100 as avgINTER3 FROM computing WHERE INTER = 3";

if ($result = $mysqli->query($INTER3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER3 = $row["avgINTER3"];

	}
}
$INTER4 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing) *100 as avgINTER4 FROM computing WHERE INTER = 4";

if ($result = $mysqli->query($INTER4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER4 = $row["avgINTER4"];

	}
}
$INTER5 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing) *100 as avg FROM computing WHERE INTER = 5";

if ($result = $mysqli->query($INTER5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER5 = $row["avg"];

	}
}


$INTER6 = "SELECT COUNT(INTER) as countINTER FROM computing";

if ($result = $mysqli->query($INTER6))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER = $row["countINTER"];
	}
}


$INTER7 = "SELECT COUNT(INTER) as countINTER1 FROM computing WHERE INTER = 1";

if ($result = $mysqli->query($INTER7))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER1 = $row["countINTER1"];
	}
}

$INTER8 = "SELECT COUNT(INTER) as countINTER2 FROM computing WHERE INTER = 2";

if ($result = $mysqli->query($INTER8))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER2 = $row["countINTER2"];
	}
}
$INTER9 = "SELECT COUNT(INTER) as countINTER3 FROM computing WHERE INTER = 3";

if ($result = $mysqli->query($INTER9))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER3 = $row["countINTER3"];
	}
}
$INTER10 = "SELECT COUNT(INTER) as countINTER4 FROM computing WHERE INTER = 4 ";

if ($result = $mysqli->query($INTER10))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER4 = $row["countINTER4"];
	}
}
$INTER11 = "SELECT COUNT(INTER) as countINTER5 FROM computing WHERE INTER = 5 ";

if ($result = $mysqli->query($INTER11))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER5 = $row["countINTER5"];
	}
}





 $POWER1 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing)*100 as avgPOWER1 FROM computing WHERE POWER = 1";

if ($result = $mysqli->query($POWER1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER1 = $row["avgPOWER1"];
	
	}
}
$POWER2 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing) *100 as avgPOWER2 FROM computing WHERE POWER = 2";

if ($result = $mysqli->query($POWER2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER2 = $row["avgPOWER2"];

	}
}
$POWER3 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing) *100 as avgPOWER3 FROM computing WHERE POWER = 3";

if ($result = $mysqli->query($POWER3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER3 = $row["avgPOWER3"];

	}
}
$POWER4 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing) *100 as avgPOWER4 FROM computing WHERE POWER = 4";

if ($result = $mysqli->query($POWER4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER4 = $row["avgPOWER4"];

	}
}
$POWER5 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing) *100 as avg FROM computing WHERE POWER = 5";

if ($result = $mysqli->query($POWER5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER5 = $row["avg"];

	}
}
$POWER6 = "SELECT COUNT(POWER) as countPOWER FROM computing";

if ($result = $mysqli->query($POWER6))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER = $row["countPOWER"];
	}
}


$POWER7 = "SELECT COUNT(POWER) as countPOWER1 FROM computing WHERE POWER = 1 ";

if ($result = $mysqli->query($POWER7))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER1 = $row["countPOWER1"];
	}
}

$POWER8 = "SELECT COUNT(POWER) as countPOWER2 FROM computing WHERE POWER = 2 ";

if ($result = $mysqli->query($POWER8))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER2 = $row["countPOWER2"];
	}
}
$POWER9 = "SELECT COUNT(POWER) as countPOWER3 FROM computing WHERE POWER = 3 ";

if ($result = $mysqli->query($POWER9))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER3 = $row["countPOWER3"];
	}
}
$POWER10 = "SELECT COUNT(POWER) as countPOWER4 FROM computing WHERE POWER = 4";

if ($result = $mysqli->query($POWER10))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER4 = $row["countPOWER4"];
	}
}
$POWER11 = "SELECT COUNT(POWER) as countPOWER5 FROM computing WHERE POWER = 5";

if ($result = $mysqli->query($POWER11))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER5 = $row["countPOWER5"];
	}
}







$FIRE1 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing)*100 as avgFIRE1 FROM computing WHERE FIRE = 1";

if ($result = $mysqli->query($FIRE1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE1 = $row["avgFIRE1"];
	
	}
}
$FIRE2 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing) *100 as avgFIRE2 FROM computing WHERE FIRE = 2";

if ($result = $mysqli->query($FIRE2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE2 = $row["avgFIRE2"];

	}
}
$FIRE3 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing) *100 as avgFIRE3 FROM computing WHERE FIRE = 3";

if ($result = $mysqli->query($FIRE3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE3 = $row["avgFIRE3"];

	}
}
$FIRE4 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing) *100 as avgFIRE4 FROM computing WHERE FIRE = 4";

if ($result = $mysqli->query($FIRE4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE4 = $row["avgFIRE4"];

	}
}
$FIRE5 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing) *100 as avg FROM computing WHERE FIRE = 5";

if ($result = $mysqli->query($FIRE5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE5 = $row["avg"];

	}
}

$FIRE6 = "SELECT COUNT(FIRE) as countFIRE FROM computing ";

if ($result = $mysqli->query($FIRE6))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE = $row["countFIRE"];
	}
}


$FIRE7 = "SELECT COUNT(FIRE) as countFIRE1 FROM computing WHERE FIRE = 1 ";

if ($result = $mysqli->query($FIRE7))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE1 = $row["countFIRE1"];
	}
}

$FIRE8 = "SELECT COUNT(FIRE) as countFIRE2 FROM computing WHERE FIRE = 2 ";

if ($result = $mysqli->query($FIRE8))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE2 = $row["countFIRE2"];
	}
}
$FIRE9 = "SELECT COUNT(INTER) as countFIRE3 FROM computing WHERE FIRE = 3";

if ($result = $mysqli->query($FIRE9))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE3 = $row["countFIRE3"];
	}
}
$FIRE10 = "SELECT COUNT(FIRE) as countFIRE4 FROM computing WHERE FIRE = 4";

if ($result = $mysqli->query($FIRE10))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE4 = $row["countFIRE4"];
	}
}
$FIRE11 = "SELECT COUNT(FIRE) as countFIRE5 FROM computing WHERE FIRE = 5";

if ($result = $mysqli->query($FIRE11))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE5 = $row["countFIRE5"];
	}
}






$cb1 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general)*100 as avgh1 FROM general WHERE MEDICAL = 1";

if ($result = $mysqli->query($cb1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm1 = $row["avgh1"];
	
	}
}
$cb2 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general) *100 as avgh2 FROM general WHERE MEDICAL = 2";

if ($result = $mysqli->query($cb2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm2 = $row["avgh2"];

	}
}
$cb3 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general) *100 as avgh3 FROM general WHERE MEDICAL = 3";

if ($result = $mysqli->query($cb3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm3 = $row["avgh3"];

	}
}
$cb4 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general) *100 as avgh4 FROM general WHERE MEDICAL = 4";

if ($result = $mysqli->query($cb4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm4 = $row["avgh4"];

	}
}
$cb5 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general) *100 as avg FROM general WHERE MEDICAL = 5";

if ($result = $mysqli->query($cb5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm5 = $row["avg"];

	}
}

$cb6 = "SELECT COUNT(MEDICAL) as counth FROM general";

if ($result = $mysqli->query($cb6))
{
	while ($row = $result->fetch_assoc()){
			$totcountb = $row["counth"];
	}
}


$cb7 = "SELECT COUNT(MEDICAL) as counth1 FROM general WHERE MEDICAL = 1";

if ($result = $mysqli->query($cb7))
{
	while ($row = $result->fetch_assoc()){
			$totcountb1 = $row["counth1"];
	}
}

$cb8 = "SELECT COUNT(MEDICAL) as counth2 FROM general WHERE MEDICAL = 2";

if ($result = $mysqli->query($cb8))
{
	while ($row = $result->fetch_assoc()){
			$totcountb2 = $row["counth2"];
	}
}
$cb9 = "SELECT COUNT(MEDICAL) as counth3 FROM general WHERE MEDICAL = 3";

if ($result = $mysqli->query($cb9))
{
	while ($row = $result->fetch_assoc()){
			$totcountb3 = $row["counth3"];
	}
}
$cb10 = "SELECT COUNT(MEDICAL) as counth4 FROM general WHERE MEDICAL = 4";

if ($result = $mysqli->query($cb10))
{
	while ($row = $result->fetch_assoc()){
			$totcountb4 = $row["counth4"];
	}
}
$cb11 = "SELECT COUNT(MEDICAL) as counth5 FROM general WHERE MEDICAL = 5";

if ($result = $mysqli->query($cb11))
{
	while ($row = $result->fetch_assoc()){
			$totcountb5 = $row["counth5"];
	}
}





$cj1 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general)*100 as avgh1 FROM general WHERE TRANSPORT = 1";

if ($result = $mysqli->query($cj1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgt1 = $row["avgh1"];
	
	}
}
$cj2 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general) *100 as avgh2 FROM general WHERE TRANSPORT = 2";

if ($result = $mysqli->query($cj2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgt2 = $row["avgh2"];

	}
}
$cj3 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general) *100 as avgh3 FROM general WHERE TRANSPORT = 3";

if ($result = $mysqli->query($cj3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgt3 = $row["avgh3"];

	}
}
$cj4 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general) *100 as avgh4 FROM general WHERE TRANSPORT = 4";

if ($result = $mysqli->query($cj4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgt4 = $row["avgh4"];

	}
}
$cj5 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general) *100 as avg FROM general WHERE TRANSPORT = 5";

if ($result = $mysqli->query($cj5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgt5 = $row["avg"];

	}
}

$cj6 = "SELECT COUNT(TRANSPORT) as counth FROM general";

if ($result = $mysqli->query($cj6))
{
	while ($row = $result->fetch_assoc()){
			$totcountj = $row["counth"];
	}
}


$cj7 = "SELECT COUNT(TRANSPORT) as counth1 FROM general WHERE TRANSPORT = 1";

if ($result = $mysqli->query($cj7))
{
	while ($row = $result->fetch_assoc()){
			$totcountj1 = $row["counth1"];
	}
}

$cj8 = "SELECT COUNT(TRANSPORT) as counth2 FROM general WHERE TRANSPORT = 2";

if ($result = $mysqli->query($cj8))
{
	while ($row = $result->fetch_assoc()){
			$totcountj2 = $row["counth2"];
	}
}
$cj9 = "SELECT COUNT(TRANSPORT) as counth3 FROM general WHERE TRANSPORT = 3";

if ($result = $mysqli->query($cj9))
{
	while ($row = $result->fetch_assoc()){
			$totcountj3 = $row["counth3"];
	}
}
$cj10 = "SELECT COUNT(TRANSPORT) as counth4 FROM general WHERE TRANSPORT = 4";

if ($result = $mysqli->query($cj10))
{
	while ($row = $result->fetch_assoc()){
			$totcountj4 = $row["counth4"];
	}
}
$cj11 = "SELECT COUNT(TRANSPORT) as counth5 FROM general WHERE TRANSPORT = 5";

if ($result = $mysqli->query($cj11))
{
	while ($row = $result->fetch_assoc()){
			$totcountj5 = $row["counth5"];
	}
}






$cm1 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM ) FROM general)*100 as avgh1 FROM general WHERE CLASSROOM  = 1";

if ($result = $mysqli->query($cm1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgclassroom1 = $row["avgh1"];
	
	}
}
$cm2 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM ) FROM general) *100 as avgh2 FROM general WHERE CLASSROOM  = 2";

if ($result = $mysqli->query($cm2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgclassroom2 = $row["avgh2"];

	}
}
$cm3 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM ) FROM general) *100 as avgh3 FROM general WHERE CLASSROOM  = 3";

if ($result = $mysqli->query($cm3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgclassroom3 = $row["avgh3"];

	}
}
$cm4 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM ) FROM general) *100 as avgh4 FROM general WHERE CLASSROOM  = 4";

if ($result = $mysqli->query($cm4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgclassroom4 = $row["avgh4"];

	}
}
$cm5 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM ) FROM general) *100 as avg FROM general WHERE CLASSROOM  = 5";

if ($result = $mysqli->query($cm5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgclassroom5 = $row["avg"];

	}
}

$cm6 = "SELECT COUNT(CLASSROOM ) as counth FROM general";

if ($result = $mysqli->query($cm6))
{
	while ($row = $result->fetch_assoc()){
			$totcountm = $row["counth"];
	}
}


$cm7 = "SELECT COUNT(CLASSROOM ) as counth1 FROM general WHERE CLASSROOM  = 1";

if ($result = $mysqli->query($cm7))
{
	while ($row = $result->fetch_assoc()){
			$totcountm1 = $row["counth1"];
	}
}

$cm8 = "SELECT COUNT(CLASSROOM ) as counth2 FROM general WHERE CLASSROOM  = 2";

if ($result = $mysqli->query($cm8))
{
	while ($row = $result->fetch_assoc()){
			$totcountm2 = $row["counth2"];
	}
}
$cm9 = "SELECT COUNT(CLASSROOM ) as counth3 FROM general WHERE CLASSROOM  = 3";

if ($result = $mysqli->query($cm9))
{
	while ($row = $result->fetch_assoc()){
			$totcountm3 = $row["counth3"];
	}
}
$cm10 = "SELECT COUNT(CLASSROOM ) as counth4 FROM general WHERE CLASSROOM  = 4";

if ($result = $mysqli->query($cm10))
{
	while ($row = $result->fetch_assoc()){
			$totcountm4 = $row["counth4"];
	}
}
$cm11 = "SELECT COUNT(CLASSROOM ) as counth5 FROM general WHERE CLASSROOM  = 5";

if ($result = $mysqli->query($cm11))
{
	while ($row = $result->fetch_assoc()){
			$totcountm5 = $row["counth5"];
	}
}








$Accommodation1 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel)*100 as avgAccommodation1 FROM hostel WHERE Accommodation = 1";

if ($result = $mysqli->query($Accommodation1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation1 = $row["avgAccommodation1"];
	
	}
}
$Accommodation2 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel) *100 as avgAccommodation2 FROM hostel WHERE Accommodation = 2";

if ($result = $mysqli->query($Accommodation2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation2 = $row["avgAccommodation2"];

	}
}
$Accommodation3 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel) *100 as avgAccommodation3 FROM hostel WHERE Accommodation = 3";

if ($result = $mysqli->query($Accommodation3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation3 = $row["avgAccommodation3"];

	}
}
$Accommodation4 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel) *100 as avgAccommodation4 FROM hostel WHERE Accommodation = 4";

if ($result = $mysqli->query($Accommodation4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation4 = $row["avgAccommodation4"];

	}
}
$Accommodation5 = "SELECT COUNT(Accommodation) / (SELECT COUNT(Accommodation) FROM hostel) *100 as avg FROM hostel WHERE Accommodation = 5";

if ($result = $mysqli->query($Accommodation5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgAccommodation5 = $row["avg"];

	}
}

$Accommodation6 = "SELECT COUNT(Accommodation) as countAccommodation FROM hostel";

if ($result = $mysqli->query($Accommodation6))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation = $row["countAccommodation"];
	}
}


$Accommodation7 = "SELECT COUNT(Accommodation) as countAccommodation1 FROM hostel WHERE Accommodation = 1";

if ($result = $mysqli->query($Accommodation7))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation1 = $row["countAccommodation1"];
	}
}

$Accommodation8 = "SELECT COUNT(Accommodation) as countAccommodation2 FROM hostel WHERE Accommodation = 2";

if ($result = $mysqli->query($Accommodation8))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation2 = $row["countAccommodation2"];
	}
}
$Accommodation9 = "SELECT COUNT(Accommodation) as countAccommodation3 FROM hostel WHERE Accommodation = 3";

if ($result = $mysqli->query($Accommodation9))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation3 = $row["countAccommodation3"];
	}
}
$Accommodation10 = "SELECT COUNT(Accommodation) as countAccommodation4 FROM hostel WHERE Accommodation = 4";

if ($result = $mysqli->query($Accommodation10))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation4 = $row["countAccommodation4"];
	}
}
$Accommodation11 = "SELECT COUNT(Accommodation) as countAccommodation5 FROM hostel WHERE Accommodation = 5";

if ($result = $mysqli->query($Accommodation11))
{
	while ($row = $result->fetch_assoc()){
			$totcountAccommodation5 = $row["countAccommodation5"];
	}
}






 $YOGA1 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel)*100 as avgYOGA1 FROM hostel WHERE YOGA = 1";

if ($result = $mysqli->query($YOGA1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA1 = $row["avgYOGA1"];
	
	}
}
$YOGA2 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel) *100 as avgYOGA2 FROM hostel WHERE YOGA = 2";

if ($result = $mysqli->query($YOGA2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA2 = $row["avgYOGA2"];

	}
}
$YOGA3 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel) *100 as avgYOGA3 FROM hostel WHERE YOGA = 3";

if ($result = $mysqli->query($YOGA3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA3 = $row["avgYOGA3"];

	}
}
$YOGA4 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel) *100 as avgYOGA4 FROM hostel WHERE YOGA = 4";

if ($result = $mysqli->query($YOGA4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA4 = $row["avgYOGA4"];

	}
}
$YOGA5 = "SELECT COUNT(YOGA) / (SELECT COUNT(YOGA) FROM hostel) *100 as avg FROM hostel WHERE YOGA = 5";

if ($result = $mysqli->query($YOGA5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgYOGA5 = $row["avg"];

	}
}
$YOGA6 = "SELECT COUNT(YOGA) as countYOGA FROM hostel";

if ($result = $mysqli->query($YOGA6))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA = $row["countYOGA"];
	}
}


$YOGA7 = "SELECT COUNT(YOGA) as countYOGA1 FROM hostel WHERE YOGA = 1";

if ($result = $mysqli->query($YOGA7))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA1 = $row["countYOGA1"];
	}
}

$YOGA8 = "SELECT COUNT(YOGA) as countYOGA2 FROM hostel WHERE YOGA = 2";

if ($result = $mysqli->query($YOGA8))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA2 = $row["countYOGA2"];
	}
}
$YOGA9 = "SELECT COUNT(YOGA) as countYOGA3 FROM hostel WHERE YOGA = 3";

if ($result = $mysqli->query($YOGA9))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA3 = $row["countYOGA3"];
	}
}
$YOGA10 = "SELECT COUNT(YOGA) as countYOGA4 FROM hostel WHERE YOGA = 4";

if ($result = $mysqli->query($YOGA10))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA4 = $row["countYOGA4"];
	}
}
$YOGA11 = "SELECT COUNT(YOGA) as countYOGA5 FROM hostel WHERE YOGA = 5";

if ($result = $mysqli->query($YOGA11))
{
	while ($row = $result->fetch_assoc()){
			$totcountYOGA5 = $row["countYOGA5"];
	}
}







 $Telephone1 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel)*100 as avgTelephone1 FROM hostel WHERE Telephone = 1";

if ($result = $mysqli->query($Telephone1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone1 = $row["avgTelephone1"];
	
	}
}
$Telephone2 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel) *100 as avgTelephone2 FROM hostel WHERE Telephone = 2";

if ($result = $mysqli->query($Telephone2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone2 = $row["avgTelephone2"];

	}
}
$Telephone3 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel) *100 as avgTelephone3 FROM hostel WHERE Telephone = 3";

if ($result = $mysqli->query($Telephone3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone3 = $row["avgTelephone3"];

	}
}
$Telephone4 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel) *100 as avgTelephone4 FROM hostel WHERE Telephone = 4";

if ($result = $mysqli->query($Telephone4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone4 = $row["avgTelephone4"];

	}
}
$Telephone5 = "SELECT COUNT(Telephone) / (SELECT COUNT(Telephone) FROM hostel) *100 as avg FROM hostel WHERE Telephone = 5";

if ($result = $mysqli->query($Telephone5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTelephone5 = $row["avg"];

	}
}
$Telephone6 = "SELECT COUNT(Telephone) as countTelephone FROM hostel";

if ($result = $mysqli->query($Telephone6))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone = $row["countTelephone"];
	}
}


$Telephone7 = "SELECT COUNT(Telephone) as countTelephone1 FROM hostel WHERE Telephone = 1";

if ($result = $mysqli->query($Telephone7))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone1 = $row["countTelephone1"];
	}
}

$Telephone8 = "SELECT COUNT(Telephone) as countTelephone2 FROM hostel WHERE Telephone = 2";

if ($result = $mysqli->query($Telephone8))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone2 = $row["countTelephone2"];
	}
}
$Telephone9 = "SELECT COUNT(Telephone) as countTelephone3 FROM hostel WHERE Telephone = 3";

if ($result = $mysqli->query($Telephone9))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone3 = $row["countTelephone3"];
	}
}
$Telephone10 = "SELECT COUNT(Telephone) as countTelephone4 FROM hostel WHERE Telephone = 4";

if ($result = $mysqli->query($Telephone10))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone4 = $row["countTelephone4"];
	}
}
$Telephone11 = "SELECT COUNT(Telephone) as countTelephone5 FROM hostel WHERE Telephone = 5";

if ($result = $mysqli->query($Telephone11))
{
	while ($row = $result->fetch_assoc()){
			$totcountTelephone5 = $row["countTelephone5"];
	}
}





 $Medical1 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel)*100 as avgMedical1 FROM hostel WHERE Medical = 1";

if ($result = $mysqli->query($Medical1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical1 = $row["avgMedical1"];
	
	}
}
$Medical2 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel) *100 as avgMedical2 FROM hostel WHERE Medical = 2";

if ($result = $mysqli->query($Medical2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical2 = $row["avgMedical2"];

	}
}
$Medical3 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel) *100 as avgMedical3 FROM hostel WHERE Medical = 3";

if ($result = $mysqli->query($Medical3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical3 = $row["avgMedical3"];

	}
}
$Medical4 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel) *100 as avgMedical4 FROM hostel WHERE Medical = 4";

if ($result = $mysqli->query($Medical4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical4 = $row["avgMedical4"];

	}
}
$Medical5 = "SELECT COUNT(Medical) / (SELECT COUNT(Medical) FROM hostel) *100 as avg FROM hostel WHERE Medical = 5";

if ($result = $mysqli->query($Medical5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMedical5 = $row["avg"];

	}
}
$Medical6 = "SELECT COUNT(Medical) as countMedical FROM hostel";

if ($result = $mysqli->query($Medical6))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical = $row["countMedical"];
	}
}


$Medical7 = "SELECT COUNT(Medical) as countMedical1 FROM hostel WHERE Medical = 1";

if ($result = $mysqli->query($Medical7))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical1 = $row["countMedical1"];
	}
}

$Medical8 = "SELECT COUNT(Medical) as countMedical2 FROM hostel WHERE Medical = 2";

if ($result = $mysqli->query($Medical8))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical2 = $row["countMedical2"];
	}
}
$Medical9 = "SELECT COUNT(Medical) as countMedical3 FROM hostel WHERE Medical = 3";

if ($result = $mysqli->query($Medical9))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical3 = $row["countMedical3"];
	}
}
$Medical10 = "SELECT COUNT(Medical) as countMedical4 FROM hostel WHERE Medical = 4";

if ($result = $mysqli->query($Medical10))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical4 = $row["countMedical4"];
	}
}
$Medical11 = "SELECT COUNT(Medical) as countMedical5 FROM hostel WHERE Medical = 5";

if ($result = $mysqli->query($Medical11))
{
	while ($row = $result->fetch_assoc()){
			$totcountMedical5 = $row["countMedical5"];
	}
}






$LAB1 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel)*100 as avgLAB1 FROM hostel WHERE LAB = 1";

if ($result = $mysqli->query($LAB1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB1 = $row["avgLAB1"];
	
	}
}
$LAB2 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel) *100 as avgLAB2 FROM hostel WHERE LAB = 2";

if ($result = $mysqli->query($LAB2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB2 = $row["avgLAB2"];

	}
}
$LAB3 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel) *100 as avgLAB3 FROM hostel WHERE LAB = 3";

if ($result = $mysqli->query($LAB3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB3 = $row["avgLAB3"];

	}
}
$LAB4 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel) *100 as avgLAB4 FROM hostel WHERE LAB = 4";

if ($result = $mysqli->query($LAB4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB4 = $row["avgLAB4"];

	}
}
$LAB5 = "SELECT COUNT(LAB) / (SELECT COUNT(LAB) FROM hostel) *100 as avg FROM hostel WHERE LAB = 5";

if ($result = $mysqli->query($LAB5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLAB5 = $row["avg"];

	}
}
$LAB6 = "SELECT COUNT(LAB) as countLAB FROM hostel";

if ($result = $mysqli->query($LAB6))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB = $row["countLAB"];
	}
}


$LAB7 = "SELECT COUNT(LAB) as countLAB1 FROM hostel WHERE LAB = 1";

if ($result = $mysqli->query($LAB7))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB1 = $row["countLAB1"];
	}
}

$LAB8 = "SELECT COUNT(LAB) as countLAB2 FROM hostel WHERE LAB = 2";

if ($result = $mysqli->query($LAB8))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB2 = $row["countLAB2"];
	}
}
$LAB9 = "SELECT COUNT(Telephone) as countLAB3 FROM hostel WHERE LAB = 3";

if ($result = $mysqli->query($LAB9))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB3 = $row["countLAB3"];
	}
}
$LAB10 = "SELECT COUNT(LAB) as countLAB4 FROM hostel WHERE LAB = 4";

if ($result = $mysqli->query($LAB10))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB4 = $row["countLAB4"];
	}
}
$LAB11 = "SELECT COUNT(LAB) as countLAB5 FROM hostel WHERE LAB = 5";

if ($result = $mysqli->query($LAB11))
{
	while ($row = $result->fetch_assoc()){
			$totcountLAB5 = $row["countLAB5"];
	}
}








$Laundry1 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel)*100 as avgLaundry1 FROM hostel WHERE Laundry = 1";

if ($result = $mysqli->query($Laundry1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry1 = $row["avgLaundry1"];
	
	}
}
$Laundry2 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel) *100 as avgLaundry2 FROM hostel WHERE Laundry = 2";

if ($result = $mysqli->query($Laundry2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry2 = $row["avgLaundry2"];

	}
}
$Laundry3 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel) *100 as avgLaundry3 FROM hostel WHERE Laundry = 3";

if ($result = $mysqli->query($Laundry3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry3 = $row["avgLaundry3"];

	}
}
$Laundry4 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel) *100 as avgLaundry4 FROM hostel WHERE Laundry = 4";

if ($result = $mysqli->query($Laundry4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry4 = $row["avgLaundry4"];

	}
}
$Laundry5 = "SELECT COUNT(Laundry) / (SELECT COUNT(Laundry) FROM hostel) *100 as avg FROM hostel WHERE Laundry = 5";

if ($result = $mysqli->query($Laundry5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgLaundry5 = $row["avg"];

	}
}
$Laundry6 = "SELECT COUNT(Laundry) as countLaundry FROM hostel";

if ($result = $mysqli->query($Laundry6))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry = $row["countLaundry"];
	}
}


$Laundry7 = "SELECT COUNT(Laundry) as countLaundry1 FROM hostel WHERE Laundry = 1";

if ($result = $mysqli->query($Laundry7))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry1 = $row["countLaundry1"];
	}
}

$Laundry8 = "SELECT COUNT(Laundry) as countLaundry2 FROM hostel WHERE Laundry = 2";

if ($result = $mysqli->query($Laundry8))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry2 = $row["countLaundry2"];
	}
}
$Laundry9 = "SELECT COUNT(Telephone) as countLaundry3 FROM hostel WHERE Laundry = 3";

if ($result = $mysqli->query($Laundry9))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry3 = $row["countLaundry3"];
	}
}
$Laundry10 = "SELECT COUNT(Laundry) as countLaundry4 FROM hostel WHERE Laundry = 4";

if ($result = $mysqli->query($Laundry10))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry4 = $row["countLaundry4"];
	}
}
$Laundry11 = "SELECT COUNT(Laundry) as countLaundry5 FROM hostel WHERE Laundry = 5";

if ($result = $mysqli->query($Laundry11))
{
	while ($row = $result->fetch_assoc()){
			$totcountLaundry5 = $row["countLaundry5"];
	}
}






$Stationary1 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel)*100 as avgStationary1 FROM hostel WHERE Stationary = 1";

if ($result = $mysqli->query($Stationary1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary1 = $row["avgStationary1"];
	
	}
}
$Stationary2 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel) *100 as avgStationary2 FROM hostel WHERE Stationary = 2";

if ($result = $mysqli->query($Stationary2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary2 = $row["avgStationary2"];

	}
}
$Stationary3 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel) *100 as avgStationary3 FROM hostel WHERE Stationary = 3";

if ($result = $mysqli->query($Stationary3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary3 = $row["avgStationary3"];

	}
}
$Stationary4 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel) *100 as avgStationary4 FROM hostel WHERE Stationary = 4";

if ($result = $mysqli->query($Stationary4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary4 = $row["avgStationary4"];

	}
}
$Stationary5 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel) *100 as avg FROM hostel WHERE Stationary = 5";

if ($result = $mysqli->query($Stationary5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary5 = $row["avg"];

	}
}
$Stationary5 = "SELECT COUNT(Stationary) / (SELECT COUNT(Stationary) FROM hostel) *100 as avg FROM hostel WHERE Stationary = 5";

if ($result = $mysqli->query($Stationary5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgStationary5 = $row["avg"];

	}
}


$Stationary6 = "SELECT COUNT(Stationary) as countStationary FROM hostel";

if ($result = $mysqli->query($Stationary6))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary = $row["countStationary"];
	}
}


$Stationary7 = "SELECT COUNT(Stationary) as countStationary1 FROM hostel WHERE Stationary = 1";

if ($result = $mysqli->query($Stationary7))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary1 = $row["countStationary1"];
	}
}

$Stationary8 = "SELECT COUNT(Stationary) as countStationary2 FROM hostel WHERE Stationary = 2";

if ($result = $mysqli->query($Stationary8))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary2 = $row["countStationary2"];
	}
}
$Stationary9 = "SELECT COUNT(Telephone) as countStationary3 FROM hostel WHERE Stationary = 3";

if ($result = $mysqli->query($Stationary9))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary3 = $row["countStationary3"];
	}
}
$Stationary10 = "SELECT COUNT(Stationary) as countStationary4 FROM hostel WHERE Stationary = 4";

if ($result = $mysqli->query($Stationary10))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary4 = $row["countStationary4"];
	}
}
$Stationary11 = "SELECT COUNT(Stationary) as countStationary5 FROM hostel WHERE Stationary = 5";

if ($result = $mysqli->query($Stationary11))
{
	while ($row = $result->fetch_assoc()){
			$totcountStationary5 = $row["countStationary5"];
	}
}






$Games1 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel)*100 as avgGames1 FROM hostel WHERE Games = 1";

if ($result = $mysqli->query($Games1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames1 = $row["avgGames1"];
	
	}
}
$Games2 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel) *100 as avgGames2 FROM hostel WHERE Games = 2";

if ($result = $mysqli->query($Games2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames2 = $row["avgGames2"];

	}
}
$Games3 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel) *100 as avgGames3 FROM hostel WHERE Games = 3";

if ($result = $mysqli->query($Games3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames3 = $row["avgGames3"];

	}
}
$Games4 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel) *100 as avgGames4 FROM hostel WHERE Games = 4";

if ($result = $mysqli->query($Games4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames4 = $row["avgGames4"];

	}
}
$Games5 = "SELECT COUNT(Games) / (SELECT COUNT(Games) FROM hostel) *100 as avg FROM hostel WHERE Games = 5";

if ($result = $mysqli->query($Games5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgGames5 = $row["avg"];

	}
}
$Games6 = "SELECT COUNT(Games) as countGames FROM hostel";

if ($result = $mysqli->query($Games6))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames = $row["countGames"];
	}
}


$Games7 = "SELECT COUNT(Games) as countGames1 FROM hostel WHERE Games = 1";

if ($result = $mysqli->query($Games7))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames1 = $row["countGames1"];
	}
}

$Games8 = "SELECT COUNT(Games) as countGames2 FROM hostel WHERE Games = 2";

if ($result = $mysqli->query($Games8))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames2 = $row["countGames2"];
	}
}
$Games9 = "SELECT COUNT(Telephone) as countGames3 FROM hostel WHERE Games = 3";

if ($result = $mysqli->query($Games9))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames3 = $row["countGames3"];
	}
}
$Games10 = "SELECT COUNT(Games) as countGames4 FROM hostel WHERE Games = 4";

if ($result = $mysqli->query($Games10))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames4 = $row["countGames4"];
	}
}
$Games11 = "SELECT COUNT(Games) as countGames5 FROM hostel WHERE Games = 5";

if ($result = $mysqli->query($Games11))
{
	while ($row = $result->fetch_assoc()){
			$totcountGames5 = $row["countGames5"];
	}
}





$book1 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library)*100 as avgh1 FROM library WHERE books = 1";

if ($result = $mysqli->query($book1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbooks1 = $row["avgh1"];
	
	}
}
$book2 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library) *100 as avgh2 FROM library WHERE books = 2";

if ($result = $mysqli->query($book2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbooks2 = $row["avgh2"];

	}
}
$book3 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library) *100 as avgh3 FROM library WHERE books = 3";

if ($result = $mysqli->query($book3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbooks3 = $row["avgh3"];

	}
}
$book4 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library) *100 as avgh4 FROM library WHERE books = 4";

if ($result = $mysqli->query($book4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbooks4 = $row["avgh4"];

	}
}
$book5 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library) *100 as avg FROM library WHERE books = 5";

if ($result = $mysqli->query($book5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgbooks5 = $row["avg"];

	}
}
$book6 = "SELECT COUNT(books) as counth FROM library";

if ($result = $mysqli->query($book6))
{
	while ($row = $result->fetch_assoc()){
			$totcountb = $row["counth"];
	}
}


$book7 = "SELECT COUNT(books) as counth1 FROM library WHERE books = 1";

if ($result = $mysqli->query($book7))
{
	while ($row = $result->fetch_assoc()){
			$totcountb1 = $row["counth1"];
	}
}

$book8 = "SELECT COUNT(books) as counth2 FROM library WHERE books = 2";

if ($result = $mysqli->query($book8))
{
	while ($row = $result->fetch_assoc()){
			$totcountb2 = $row["counth2"];
	}
}
$book9 = "SELECT COUNT(books) as counth3 FROM library WHERE books = 3";

if ($result = $mysqli->query($book9))
{
	while ($row = $result->fetch_assoc()){
			$totcountb3 = $row["counth3"];
	}
}
$book10 = "SELECT COUNT(books) as counth4 FROM library WHERE books = 4";

if ($result = $mysqli->query($book10))
{
	while ($row = $result->fetch_assoc()){
			$totcountb4 = $row["counth4"];
	}
}
$book11 = "SELECT COUNT(books) as counth5 FROM library WHERE books = 5";

if ($result = $mysqli->query($book11))
{
	while ($row = $result->fetch_assoc()){
			$totcountb5 = $row["counth5"];
	}
}




$cj1 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library)*100 as avgh1 FROM library WHERE journal = 1";

if ($result = $mysqli->query($cj1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj1 = $row["avgh1"];
	
	}
}
$cj2 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library) *100 as avgh2 FROM library WHERE journal = 2";

if ($result = $mysqli->query($cj2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj2 = $row["avgh2"];

	}
}
$cj3 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library) *100 as avgh3 FROM library WHERE journal = 3";

if ($result = $mysqli->query($cj3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj3 = $row["avgh3"];

	}
}
$cj4 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library) *100 as avgh4 FROM library WHERE journal = 4";

if ($result = $mysqli->query($cj4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj4 = $row["avgh4"];

	}
}
$cj5 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library) *100 as avg FROM library WHERE journal = 5";

if ($result = $mysqli->query($cj5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj5 = $row["avg"];

	}
}
$cj6 = "SELECT COUNT(journal) as counth FROM library";

if ($result = $mysqli->query($cj6))
{
	while ($row = $result->fetch_assoc()){
			$totcountj = $row["counth"];
	}
}


$cj7 = "SELECT COUNT(journal) as counth1 FROM library WHERE journal = 1";

if ($result = $mysqli->query($cj7))
{
	while ($row = $result->fetch_assoc()){
			$totcountj1 = $row["counth1"];
	}
}

$cj8 = "SELECT COUNT(journal) as counth2 FROM library WHERE journal = 2";

if ($result = $mysqli->query($cj8))
{
	while ($row = $result->fetch_assoc()){
			$totcountj2 = $row["counth2"];
	}
}
$cj9 = "SELECT COUNT(journal) as counth3 FROM library WHERE journal = 3";

if ($result = $mysqli->query($cj9))
{
	while ($row = $result->fetch_assoc()){
			$totcountj3 = $row["counth3"];
	}
}
$cj10 = "SELECT COUNT(journal) as counth4 FROM library WHERE journal = 4";

if ($result = $mysqli->query($cj10))
{
	while ($row = $result->fetch_assoc()){
			$totcountj4 = $row["counth4"];
	}
}
$cj11 = "SELECT COUNT(journal) as counth5 FROM library WHERE journal = 5";

if ($result = $mysqli->query($cj11))
{
	while ($row = $result->fetch_assoc()){
			$totcountj5 = $row["counth5"];
	}
}




$cm1 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library)*100 as avgh1 FROM library WHERE material = 1";

if ($result = $mysqli->query($cm1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgmaterial1 = $row["avgh1"];
	
	}
}
$cm2 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library) *100 as avgh2 FROM library WHERE material = 2";

if ($result = $mysqli->query($cm2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgmaterial2 = $row["avgh2"];

	}
}
$cm3 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library) *100 as avgh3 FROM library WHERE material = 3";

if ($result = $mysqli->query($cm3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgmaterial3 = $row["avgh3"];

	}
}
$cm4 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library) *100 as avgh4 FROM library WHERE material = 4";

if ($result = $mysqli->query($cm4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgmaterial4 = $row["avgh4"];

	}
}
$cm5 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library) *100 as avg FROM library WHERE material = 5";

if ($result = $mysqli->query($cm5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgmaterial5 = $row["avg"];

	}
}
$cm6 = "SELECT COUNT(material) as counth FROM library";

if ($result = $mysqli->query($cm6))
{
	while ($row = $result->fetch_assoc()){
			$totcountm = $row["counth"];
	}
}


$cm7 = "SELECT COUNT(material) as counth1 FROM library WHERE material = 1";

if ($result = $mysqli->query($cm7))
{
	while ($row = $result->fetch_assoc()){
			$totcountm1 = $row["counth1"];
	}
}

$cm8 = "SELECT COUNT(material) as counth2 FROM library WHERE material = 2";

if ($result = $mysqli->query($cm8))
{
	while ($row = $result->fetch_assoc()){
			$totcountm2 = $row["counth2"];
	}
}
$cm9 = "SELECT COUNT(material) as counth3 FROM library WHERE material = 3";

if ($result = $mysqli->query($cm9))
{
	while ($row = $result->fetch_assoc()){
			$totcountm3 = $row["counth3"];
	}
}
$cm10 = "SELECT COUNT(material) as counth4 FROM library WHERE material = 4";

if ($result = $mysqli->query($cm10))
{
	while ($row = $result->fetch_assoc()){
			$totcountm4 = $row["counth4"];
	}
}
$cm11 = "SELECT COUNT(material) as counth5 FROM library WHERE material = 5";

if ($result = $mysqli->query($cm11))
{
	while ($row = $result->fetch_assoc()){
			$totcountm5 = $row["counth5"];
	}
}





$cl1 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library)*100 as avgh1 FROM library WHERE Library = 1";

if ($result = $mysqli->query($cl1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avglib1 = $row["avgh1"];
	
	}
}
$cl2 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library) *100 as avgh2 FROM library WHERE Library = 2";

if ($result = $mysqli->query($cl2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avglib2 = $row["avgh2"];

	}
}
$cl3 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library) *100 as avgh3 FROM library WHERE Library = 3";

if ($result = $mysqli->query($cl3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avglib3 = $row["avgh3"];

	}
}
$cl4 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library) *100 as avgh4 FROM library WHERE Library = 4";

if ($result = $mysqli->query($cl4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avglib4 = $row["avgh4"];

	}
}
$cl5 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library) *100 as avg FROM library WHERE Library = 5";

if ($result = $mysqli->query($cl5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avglib5 = $row["avg"];

	}
}
$cl6 = "SELECT COUNT(Library) as counth FROM library";

if ($result = $mysqli->query($cl6))
{
	while ($row = $result->fetch_assoc()){
			$totcountl = $row["counth"];
	}
}


$cl7 = "SELECT COUNT(Library) as counth1 FROM library WHERE Library = 1";

if ($result = $mysqli->query($cl7))
{
	while ($row = $result->fetch_assoc()){
			$totcountl1 = $row["counth1"];
	}
}

$cl8 = "SELECT COUNT(Library) as counth2 FROM library WHERE Library = 2";

if ($result = $mysqli->query($cl8))
{
	while ($row = $result->fetch_assoc()){
			$totcountl2 = $row["counth2"];
	}
}
$cl9 = "SELECT COUNT(Library) as counth3 FROM library WHERE Library = 3";

if ($result = $mysqli->query($cl9))
{
	while ($row = $result->fetch_assoc()){
			$totcountl3 = $row["counth3"];
	}
}
$cl10 = "SELECT COUNT(Library) as counth4 FROM library WHERE Library = 4";

if ($result = $mysqli->query($cl10))
{
	while ($row = $result->fetch_assoc()){
			$totcountl4 = $row["counth4"];
	}
}
$cl11 = "SELECT COUNT(Library) as counth5 FROM library WHERE Library = 5";

if ($result = $mysqli->query($cl11))
{
	while ($row = $result->fetch_assoc()){
			$totcountl5 = $row["counth5"];
	}
}





$cd1 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library)*100 as avgh1 FROM library WHERE dlf = 1";

if ($result = $mysqli->query($cd1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgdlf1 = $row["avgh1"];
	
	}
}
$cd2 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library) *100 as avgh2 FROM library WHERE dlf = 2";

if ($result = $mysqli->query($cd2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgdlf2 = $row["avgh2"];

	}
}
$cd3 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library) *100 as avgh3 FROM library WHERE dlf = 3";

if ($result = $mysqli->query($cd3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgdlf3 = $row["avgh3"];

	}
}
$cd4 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library) *100 as avgh4 FROM library WHERE dlf = 4";

if ($result = $mysqli->query($cd4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd4 = $row["avgh4"];

	}
}
$cd5 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library) *100 as avg FROM library WHERE dlf = 5";

if ($result = $mysqli->query($cd5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgdlf5 = $row["avg"];

	}
}
$cd6 = "SELECT COUNT(dlf) as counth FROM library";

if ($result = $mysqli->query($cd6))
{
	while ($row = $result->fetch_assoc()){
			$totcountd = $row["counth"];
	}
}


$cd7 = "SELECT COUNT(dlf) as counth1 FROM library WHERE dlf = 1";

if ($result = $mysqli->query($cd7))
{
	while ($row = $result->fetch_assoc()){
			$totcountd1 = $row["counth1"];
	}
}

$cd8 = "SELECT COUNT(dlf) as counth2 FROM library WHERE dlf = 2";

if ($result = $mysqli->query($cd8))
{
	while ($row = $result->fetch_assoc()){
			$totcountd2 = $row["counth2"];
	}
}
$cd9 = "SELECT COUNT(dlf) as counth3 FROM library WHERE dlf = 3";

if ($result = $mysqli->query($cd9))
{
	while ($row = $result->fetch_assoc()){
			$totcountd3 = $row["counth3"];
	}
}
$cd10 = "SELECT COUNT(dlf) as counth4 FROM library WHERE dlf = 4";

if ($result = $mysqli->query($cd10))
{
	while ($row = $result->fetch_assoc()){
			$totcountd4 = $row["counth4"];
	}
}
$cd11 = "SELECT COUNT(dlf) as counth5 FROM library WHERE dlf = 5";

if ($result = $mysqli->query($cd11))
{
	while ($row = $result->fetch_assoc()){
			$totcountd5 = $row["counth5"];
	}
}





$FOOD1 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess )*100 as avgFOOD1 FROM mess WHERE FOOD = 1";

if ($result = $mysqli->query($FOOD1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD1 = $row["avgFOOD1"];
	
	}
}
$FOOD2 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess) *100 as avgFOOD2 FROM mess WHERE FOOD = 2";

if ($result = $mysqli->query($FOOD2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD2 = $row["avgFOOD2"];

	}
}
$FOOD3 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess) *100 as avgFOOD3 FROM mess WHERE FOOD = 3";

if ($result = $mysqli->query($FOOD3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD3 = $row["avgFOOD3"];

	}
}
$FOOD4 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess) *100 as avgFOOD4 FROM mess WHERE FOOD = 4";

if ($result = $mysqli->query($FOOD4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD4 = $row["avgFOOD4"];

	}
}
$FOOD5 = "SELECT COUNT(FOOD) / (SELECT COUNT(FOOD) FROM mess) *100 as avg FROM mess WHERE FOOD = 5";

if ($result = $mysqli->query($FOOD5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFOOD5 = $row["avg"];

	}
}
$FOOD6 = "SELECT COUNT(FOOD) as countFOOD FROM mess";

if ($result = $mysqli->query($FOOD6))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD = $row["countFOOD"];
	}
}


$FOOD7 = "SELECT COUNT(FOOD) as countFOOD1 FROM mess WHERE FOOD = 1";

if ($result = $mysqli->query($FOOD7))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD1 = $row["countFOOD1"];
	}
}

$FOOD8 = "SELECT COUNT(FOOD) as countFOOD2 FROM mess WHERE FOOD = 2";

if ($result = $mysqli->query($FOOD8))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD2 = $row["countFOOD2"];
	}
}
$FOOD9 = "SELECT COUNT(FOOD) as countFOOD3 FROM mess WHERE FOOD = 3";

if ($result = $mysqli->query($FOOD9))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD3 = $row["countFOOD3"];
	}
}
$FOOD10 = "SELECT COUNT(FOOD) as countFOOD4 FROM mess WHERE FOOD = 4";

if ($result = $mysqli->query($FOOD10))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD4 = $row["countFOOD4"];
	}
}
$FOOD11 = "SELECT COUNT(FOOD) as countFOOD5 FROM mess WHERE FOOD = 5";

if ($result = $mysqli->query($FOOD11))
{
	while ($row = $result->fetch_assoc()){
			$totcountFOOD5 = $row["countFOOD5"];
	}
}





 $WATER1 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess)*100 as avgWATER1 FROM mess WHERE WATER = 1";

if ($result = $mysqli->query($WATER1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER1 = $row["avgWATER1"];
	
	}
}
$WATER2 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess) *100 as avgWATER2 FROM mess WHERE WATER = 2";

if ($result = $mysqli->query($WATER2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER2 = $row["avgWATER2"];

	}
}
$WATER3 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess) *100 as avgWATER3 FROM mess WHERE WATER = 3";

if ($result = $mysqli->query($WATER3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER3 = $row["avgWATER3"];

	}
}
$WATER4 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess) *100 as avgWATER4 FROM mess WHERE WATER = 4";

if ($result = $mysqli->query($WATER4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER4 = $row["avgWATER4"];

	}
}
$WATER5 = "SELECT COUNT(WATER) / (SELECT COUNT(WATER) FROM mess) *100 as avg FROM mess WHERE WATER = 5";

if ($result = $mysqli->query($WATER5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgWATER5 = $row["avg"];

	}
}
$WATER6 = "SELECT COUNT(WATER) as countWATER FROM mess";

if ($result = $mysqli->query($WATER6))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER = $row["countWATER"];
	}
}


$WATER7 = "SELECT COUNT(WATER) as countWATER1 FROM mess WHERE WATER = 1";

if ($result = $mysqli->query($WATER7))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER1 = $row["countWATER1"];
	}
}

$WATER8 = "SELECT COUNT(WATER) as countWATER2 FROM mess WHERE WATER = 2";

if ($result = $mysqli->query($WATER8))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER2 = $row["countWATER2"];
	}
}
$WATER9 = "SELECT COUNT(WATER) as countWATER3 FROM mess WHERE WATER = 3";

if ($result = $mysqli->query($WATER9))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER3 = $row["countWATER3"];
	}
}
$WATER10 = "SELECT COUNT(WATER) as countWATER4 FROM mess WHERE WATER = 4";

if ($result = $mysqli->query($WATER10))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER4 = $row["countWATER4"];
	}
}
$WATER11 = "SELECT COUNT(WATER) as countWATER5 FROM mess WHERE WATER = 5";

if ($result = $mysqli->query($WATER11))
{
	while ($row = $result->fetch_assoc()){
			$totcountWATER5 = $row["countWATER5"];
	}
}




 $MENU1 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess)*100 as avgMENU1 FROM mess WHERE MENU = 1";

if ($result = $mysqli->query($MENU1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU1 = $row["avgMENU1"];
	
	}
}
$MENU2 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess) *100 as avgMENU2 FROM mess WHERE MENU = 2";

if ($result = $mysqli->query($MENU2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU2 = $row["avgMENU2"];

	}
}
$MENU3 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess) *100 as avgMENU3 FROM mess WHERE MENU = 3";

if ($result = $mysqli->query($MENU3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU3 = $row["avgMENU3"];

	}
}
$MENU4 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess) *100 as avgMENU4 FROM mess WHERE MENU = 4";

if ($result = $mysqli->query($MENU4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU4 = $row["avgMENU4"];

	}
}
$MENU5 = "SELECT COUNT(MENU) / (SELECT COUNT(MENU) FROM mess) *100 as avg FROM mess WHERE MENU = 5";

if ($result = $mysqli->query($MENU5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgMENU5 = $row["avg"];

	}
}
$MENU6 = "SELECT COUNT(MENU) as countMENU FROM mess";

if ($result = $mysqli->query($MENU6))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU = $row["countMENU"];
	}
}


$MENU7 = "SELECT COUNT(MENU) as countMENU1 FROM mess WHERE MENU = 1";

if ($result = $mysqli->query($MENU7))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU1 = $row["countMENU1"];
	}
}

$MENU8 = "SELECT COUNT(MENU) as countMENU2 FROM mess WHERE MENU = 2";

if ($result = $mysqli->query($MENU8))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU2 = $row["countMENU2"];
	}
}
$MENU9 = "SELECT COUNT(MENU) as countMENU3 FROM mess WHERE MENU = 3";

if ($result = $mysqli->query($MENU9))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU3 = $row["countMENU3"];
	}
}
$MENU10 = "SELECT COUNT(MENU) as countMENU4 FROM mess WHERE MENU = 4";

if ($result = $mysqli->query($MENU10))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU4 = $row["countMENU4"];
	}
}
$MENU11 = "SELECT COUNT(MENU) as countMENU5 FROM mess WHERE MENU = 5";

if ($result = $mysqli->query($MENU11))
{
	while ($row = $result->fetch_assoc()){
			$totcountMENU5 = $row["countMENU5"];
	}
}





 $TIME1 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess)*100 as avgTIME1 FROM mess WHERE TIME = 1";

if ($result = $mysqli->query($TIME1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME1 = $row["avgTIME1"];
	
	}
}
$TIME2 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess) *100 as avgTIME2 FROM mess WHERE TIME = 2";

if ($result = $mysqli->query($TIME2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME2 = $row["avgTIME2"];

	}
}
$TIME3 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess) *100 as avgTIME3 FROM mess WHERE TIME = 3";

if ($result = $mysqli->query($TIME3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME3 = $row["avgTIME3"];

	}
}
$TIME4 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess) *100 as avgTIME4 FROM mess WHERE TIME = 4";

if ($result = $mysqli->query($TIME4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME4 = $row["avgTIME4"];

	}
}
$TIME5 = "SELECT COUNT(TIME) / (SELECT COUNT(TIME) FROM mess) *100 as avg FROM mess WHERE TIME = 5";

if ($result = $mysqli->query($TIME5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgTIME5 = $row["avg"];

	}
}
$TIME6 = "SELECT COUNT(TIME) as countTIME FROM mess";

if ($result = $mysqli->query($TIME6))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME = $row["countTIME"];
	}
}


$TIME7 = "SELECT COUNT(TIME) as countTIME1 FROM mess WHERE TIME = 1";

if ($result = $mysqli->query($TIME7))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME1 = $row["countTIME1"];
	}
}

$TIME8 = "SELECT COUNT(TIME) as countTIME2 FROM mess WHERE TIME = 2";

if ($result = $mysqli->query($TIME8))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME2 = $row["countTIME2"];
	}
}
$TIME9 = "SELECT COUNT(TIME) as countTIME3 FROM mess WHERE TIME = 3";

if ($result = $mysqli->query($TIME9))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME3 = $row["countTIME3"];
	}
}
$TIME10 = "SELECT COUNT(TIME) as countTIME4 FROM mess WHERE TIME = 4";

if ($result = $mysqli->query($TIME10))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME4 = $row["countTIME4"];
	}
}
$TIME11 = "SELECT COUNT(TIME) as countTIME5 FROM mess WHERE TIME = 5";

if ($result = $mysqli->query($TIME11))
{
	while ($row = $result->fetch_assoc()){
			$totcountTIME5 = $row["countTIME5"];
	}
}




$VENTILATION1 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess)*100 as avgVENTILATION1 FROM mess WHERE VENTILATION = 1";

if ($result = $mysqli->query($VENTILATION1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION1 = $row["avgVENTILATION1"];
	
	}
}
$VENTILATION2 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess) *100 as avgVENTILATION2 FROM mess WHERE VENTILATION = 2";

if ($result = $mysqli->query($VENTILATION2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION2 = $row["avgVENTILATION2"];

	}
}
$VENTILATION3 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess) *100 as avgVENTILATION3 FROM mess WHERE VENTILATION = 3";

if ($result = $mysqli->query($VENTILATION3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION3 = $row["avgVENTILATION3"];

	}
}
$VENTILATION4 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess) *100 as avgVENTILATION4 FROM mess WHERE VENTILATION = 4";

if ($result = $mysqli->query($VENTILATION4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION4 = $row["avgVENTILATION4"];

	}
}
$VENTILATION5 = "SELECT COUNT(VENTILATION) / (SELECT COUNT(VENTILATION) FROM mess) *100 as avg FROM mess WHERE VENTILATION = 5";

if ($result = $mysqli->query($VENTILATION5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgVENTILATION5 = $row["avg"];

	}
}
$VENTILATION6 = "SELECT COUNT(VENTILATION) as countVENTILATION FROM mess";

if ($result = $mysqli->query($VENTILATION6))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION = $row["countVENTILATION"];
	}
}


$VENTILATION7 = "SELECT COUNT(VENTILATION) as countVENTILATION1 FROM mess WHERE VENTILATION = 1";

if ($result = $mysqli->query($VENTILATION7))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION1 = $row["countVENTILATION1"];
	}
}

$VENTILATION8 = "SELECT COUNT(VENTILATION) as countVENTILATION2 FROM mess WHERE VENTILATION = 2";

if ($result = $mysqli->query($VENTILATION8))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION2 = $row["countVENTILATION2"];
	}
}
$VENTILATION9 = "SELECT COUNT(MENU) as countVENTILATION3 FROM mess WHERE VENTILATION = 3";

if ($result = $mysqli->query($VENTILATION9))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION3 = $row["countVENTILATION3"];
	}
}
$VENTILATION10 = "SELECT COUNT(VENTILATION) as countVENTILATION4 FROM mess WHERE VENTILATION = 4";

if ($result = $mysqli->query($VENTILATION10))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION4 = $row["countVENTILATION4"];
	}
}
$VENTILATION11 = "SELECT COUNT(VENTILATION) as countVENTILATION5 FROM mess WHERE VENTILATION = 5";

if ($result = $mysqli->query($VENTILATION11))
{
	while ($row = $result->fetch_assoc()){
			$totcountVENTILATION5 = $row["countVENTILATION5"];
	}
}






$HYGIENE1 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess)*100 as avgHYGIENE1 FROM mess WHERE HYGIENE = 1";

if ($result = $mysqli->query($HYGIENE1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE1 = $row["avgHYGIENE1"];
	
	}
}
$HYGIENE2 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess) *100 as avgHYGIENE2 FROM mess WHERE HYGIENE = 2";

if ($result = $mysqli->query($HYGIENE2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE2 = $row["avgHYGIENE2"];

	}
}
$HYGIENE3 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess) *100 as avgHYGIENE3 FROM mess WHERE HYGIENE = 3";

if ($result = $mysqli->query($HYGIENE3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE3 = $row["avgHYGIENE3"];

	}
}
$HYGIENE4 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess) *100 as avgHYGIENE4 FROM mess WHERE HYGIENE = 4";

if ($result = $mysqli->query($HYGIENE4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE4 = $row["avgHYGIENE4"];

	}
}
$HYGIENE5 = "SELECT COUNT(HYGIENE) / (SELECT COUNT(HYGIENE) FROM mess) *100 as avg FROM mess WHERE HYGIENE = 5";

if ($result = $mysqli->query($HYGIENE5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHYGIENE5 = $row["avg"];

	}
}
$HYGIENE6 = "SELECT COUNT(HYGIENE) as countHYGIENE FROM mess";

if ($result = $mysqli->query($HYGIENE6))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE = $row["countHYGIENE"];
	}
}


$HYGIENE7 = "SELECT COUNT(HYGIENE) as countHYGIENE1 FROM mess WHERE HYGIENE = 1";

if ($result = $mysqli->query($HYGIENE7))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE1 = $row["countHYGIENE1"];
	}
}

$HYGIENE8 = "SELECT COUNT(HYGIENE) as countHYGIENE2 FROM mess WHERE HYGIENE = 2";

if ($result = $mysqli->query($HYGIENE8))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE2 = $row["countHYGIENE2"];
	}
}
$HYGIENE9 = "SELECT COUNT(MENU) as countHYGIENE3 FROM mess WHERE HYGIENE = 3";

if ($result = $mysqli->query($HYGIENE9))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE3 = $row["countHYGIENE3"];
	}
}
$HYGIENE10 = "SELECT COUNT(HYGIENE) as countHYGIENE4 FROM mess WHERE HYGIENE = 4";

if ($result = $mysqli->query($HYGIENE10))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE4 = $row["countHYGIENE4"];
	}
}
$HYGIENE11 = "SELECT COUNT(HYGIENE) as countHYGIENE5 FROM mess WHERE HYGIENE = 5";

if ($result = $mysqli->query($HYGIENE11))
{
	while ($row = $result->fetch_assoc()){
			$totcountHYGIENE5 = $row["countHYGIENE5"];
	}
}


$STAFF1 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess)*100 as avgSTAFF1 FROM mess WHERE STAFF = 1";

if ($result = $mysqli->query($STAFF1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF1 = $row["avgSTAFF1"];
	
	}
}
$STAFF2 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess) *100 as avgSTAFF2 FROM mess WHERE STAFF = 2";

if ($result = $mysqli->query($STAFF2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF2 = $row["avgSTAFF2"];

	}
}
$STAFF3 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess) *100 as avgSTAFF3 FROM mess WHERE STAFF = 3";

if ($result = $mysqli->query($STAFF3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF3 = $row["avgSTAFF3"];

	}
}
$STAFF4 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess) *100 as avgSTAFF4 FROM mess WHERE STAFF = 4";

if ($result = $mysqli->query($STAFF4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF4 = $row["avgSTAFF4"];

	}
}
$STAFF5 = "SELECT COUNT(STAFF) / (SELECT COUNT(STAFF) FROM mess) *100 as avg FROM mess WHERE STAFF = 5";

if ($result = $mysqli->query($STAFF5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSTAFF5 = $row["avg"];

	}
}
$STAFF6 = "SELECT COUNT(STAFF) as countSTAFF FROM mess";

if ($result = $mysqli->query($STAFF6))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF = $row["countSTAFF"];
	}
}


$STAFF7 = "SELECT COUNT(STAFF) as countSTAFF1 FROM mess WHERE STAFF = 1";

if ($result = $mysqli->query($STAFF7))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF1 = $row["countSTAFF1"];
	}
}

$STAFF8 = "SELECT COUNT(STAFF) as countSTAFF2 FROM mess WHERE STAFF = 2";

if ($result = $mysqli->query($STAFF8))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF2 = $row["countSTAFF2"];
	}
}
$STAFF9 = "SELECT COUNT(MENU) as countSTAFF3 FROM mess WHERE STAFF = 3";

if ($result = $mysqli->query($STAFF9))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF3 = $row["countSTAFF3"];
	}
}
$STAFF10 = "SELECT COUNT(STAFF) as countSTAFF4 FROM mess WHERE STAFF = 4";

if ($result = $mysqli->query($STAFF10))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF4 = $row["countSTAFF4"];
	}
}
$STAFF11 = "SELECT COUNT(STAFF) as countSTAFF5 FROM mess WHERE STAFF = 5";

if ($result = $mysqli->query($STAFF11))
{
	while ($row = $result->fetch_assoc()){
			$totcountSTAFF5 = $row["countSTAFF5"];
	}
}





 $indoor1 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports)*100 as avgh1 FROM sportss WHERE INDOOR = 1";

if ($result = $mysqli->query($indoor1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi1 = $row["avgh1"];
	
	}
}
$indoor2 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports) *100 as avgh2 FROM sports WHERE INDOOR = 2";

if ($result = $mysqli->query($indoor2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi2 = $row["avgh2"];

	}
}
$indoor3 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports) *100 as avgh3 FROM sports WHERE INDOOR = 3";

if ($result = $mysqli->query($indoor3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi3 = $row["avgh3"];

	}
}
$indoor4 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports) *100 as avgh4 FROM sports WHERE INDOOR = 4";

if ($result = $mysqli->query($indoor4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi4 = $row["avgh4"];

	}
}
$indoor5 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports) *100 as avg FROM sports WHERE INDOOR = 5";

if ($result = $mysqli->query($indoor5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi5 = $row["avg"];

	}
}
$indoor6 = "SELECT COUNT(INDOOR) as counth FROM sports";

if ($result = $mysqli->query($indoor6))
{
	while ($row = $result->fetch_assoc()){
			$totcounti = $row["counth"];
	}
}


$indoor7 = "SELECT COUNT(INDOOR) as counth1 FROM sports WHERE INDOOR = 1";

if ($result = $mysqli->query($indoor7))
{
	while ($row = $result->fetch_assoc()){
			$totcounti1 = $row["counth1"];
	}
}

$indoor8 = "SELECT COUNT(INDOOR) as counth2 FROM sports WHERE INDOOR = 2";

if ($result = $mysqli->query($indoor8))
{
	while ($row = $result->fetch_assoc()){
			$totcounti2 = $row["counth2"];
	}
}
$indoor9 = "SELECT COUNT(INDOOR) as counth3 FROM sports WHERE INDOOR = 3";

if ($result = $mysqli->query($indoor9))
{
	while ($row = $result->fetch_assoc()){
			$totcounti3 = $row["counth3"];
	}
}
$indoor10 = "SELECT COUNT(INDOOR) as counth4 FROM sports WHERE INDOOR = 4";

if ($result = $mysqli->query($indoor10))
{
	while ($row = $result->fetch_assoc()){
			$totcounti4 = $row["counth4"];
	}
}
$indoor11 = "SELECT COUNT(INDOOR) as counth5 FROM sports WHERE INDOOR = 5";

if ($result = $mysqli->query($indoor11))
{
	while ($row = $result->fetch_assoc()){
			$totcounti5 = $row["counth5"];
	}
}


$cj1 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports)*100 as avgh1 FROM sports WHERE OUTDOOR = 1";

if ($result = $mysqli->query($cj1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo1 = $row["avgh1"];
	
	}
}
$cj2 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports) *100 as avgh2 FROM sports WHERE OUTDOOR = 2";

if ($result = $mysqli->query($cj2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo2 = $row["avgh2"];

	}
}
$cj3 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports) *100 as avgh3 FROM sports WHERE OUTDOOR = 3";

if ($result = $mysqli->query($cj3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo3 = $row["avgh3"];

	}
}
$cj4 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports) *100 as avgh4 FROM sports WHERE OUTDOOR = 4";

if ($result = $mysqli->query($cj4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo4 = $row["avgh4"];

	}
}
$cj5 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports) *100 as avg FROM sports WHERE OUTDOOR = 5";

if ($result = $mysqli->query($cj5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo5 = $row["avg"];

	}
}
$cj6 = "SELECT COUNT(OUTDOOR) as counth FROM sports";

if ($result = $mysqli->query($cj6))
{
	while ($row = $result->fetch_assoc()){
			$totcounto = $row["counth"];
	}
}


$cj7 = "SELECT COUNT(OUTDOOR) as counth1 FROM sports WHERE OUTDOOR = 1";

if ($result = $mysqli->query($cj7))
{
	while ($row = $result->fetch_assoc()){
			$totcounto1 = $row["counth1"];
	}
}

$cj8 = "SELECT COUNT(OUTDOOR) as counth2 FROM sports WHERE OUTDOOR = 2";

if ($result = $mysqli->query($cj8))
{
	while ($row = $result->fetch_assoc()){
			$totcounto2 = $row["counth2"];
	}
}
$cj9 = "SELECT COUNT(OUTDOOR) as counth3 FROM sports WHERE OUTDOOR = 3";

if ($result = $mysqli->query($cj9))
{
	while ($row = $result->fetch_assoc()){
			$totcounto3 = $row["counth3"];
	}
}
$cj10 = "SELECT COUNT(OUTDOOR) as counth4 FROM sports WHERE OUTDOOR = 4";

if ($result = $mysqli->query($cj10))
{
	while ($row = $result->fetch_assoc()){
			$totcounto4 = $row["counth4"];
	}
}
$cj11 = "SELECT COUNT(OUTDOOR) as counth5 FROM sports WHERE OUTDOOR = 5";

if ($result = $mysqli->query($cj11))
{
	while ($row = $result->fetch_assoc()){
			$totcounto5 = $row["counth5"];
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
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}
/* Individual bars BUS */
.bar1-5 {width: <?php echo $avgb5; ?>%; height: 18px; background-color: #4CAF50;}
.bar1-4 {width: <?php echo $avgb4; ?>%; height: 18px; background-color: #2196F3;}
.bar1-3 {width: <?php echo $avgb3; ?>%; height: 18px; background-color: #00bcd4;}
.bar1-2 {width: <?php echo $avgb2; ?>%; height: 18px; background-color: #ff9800;}
.bar1-1 {width: <?php echo $avgb1; ?>%; height: 18px; background-color: #f44336;}

.bar2-5 {width: <?php echo $avgj5; ?>%; height: 18px; background-color: #4CAF50;}
.bar2-4 {width: <?php echo $avgj4; ?>%; height: 18px; background-color: #2196F3;}
.bar2-3 {width: <?php echo $avgj3; ?>%; height: 18px; background-color: #00bcd4;}
.bar2-2 {width: <?php echo $avgj2; ?>%; height: 18px; background-color: #ff9800;}
.bar2-1 {width: <?php echo $avgj1; ?>%; height: 18px; background-color: #f44336;}

.bar3-5 {width: <?php echo $avgm5; ?>%; height: 18px; background-color: #4CAF50;}
.bar3-4 {width: <?php echo $avgm4; ?>%; height: 18px; background-color: #2196F3;}
.bar3-3 {width: <?php echo $avgm3; ?>%; height: 18px; background-color: #00bcd4;}
.bar3-2 {width: <?php echo $avgm2; ?>%; height: 18px; background-color: #ff9800;}
.bar3-1 {width: <?php echo $avgm1; ?>%; height: 18px; background-color: #f44336;}

.bar4-5 {width: <?php echo $avgl5; ?>%; height: 18px; background-color: #4CAF50;}
.bar4-4 {width: <?php echo $avgl4; ?>%; height: 18px; background-color: #2196F3;}
.bar4-3 {width: <?php echo $avgl3; ?>%; height: 18px; background-color: #00bcd4;}
.bar4-2 {width: <?php echo $avgl2; ?>%; height: 18px; background-color: #ff9800;}
.bar4-1 {width: <?php echo $avgl1; ?>%; height: 18px; background-color: #f44336;}



/* Individual bars MESS */
.barm1-5 {width: <?php echo $avgFOOD5; ?>%; height: 18px; background-color: #4CAF50;}
.barm1-4 {width: <?php echo $avgFOOD4; ?>%; height: 18px; background-color: #2196F3;}
.barm1-3 {width: <?php echo $avgFOOD3; ?>%; height: 18px; background-color: #00bcd4;}
.barm1-2 {width: <?php echo $avgFOOD2; ?>%; height: 18px; background-color: #ff9800;}
.barm1-1 {width: <?php echo $avgFOOD1; ?>%; height: 18px; background-color: #f44336;}

.barm2-5 {width: <?php echo $avgWATER5; ?>%; height: 18px; background-color: #4CAF50;}
.barm2-4 {width: <?php echo $avgWATER4; ?>%; height: 18px; background-color: #2196F3;}
.barm2-3 {width: <?php echo $avgWATER3; ?>%; height: 18px; background-color: #00bcd4;}
.barm2-2 {width: <?php echo $avgWATER2; ?>%; height: 18px; background-color: #ff9800;}
.barm2-1 {width: <?php echo $avgWATER1; ?>%; height: 18px; background-color: #f44336;}

.barm3-5 {width: <?php echo $avgMENU5; ?>%; height: 18px; background-color: #4CAF50;}
.barm3-4 {width: <?php echo $avgMENU4; ?>%; height: 18px; background-color: #2196F3;}
.barm3-3 {width: <?php echo $avgMENU3; ?>%; height: 18px; background-color: #00bcd4;}
.barm3-2 {width: <?php echo $avgMENU2; ?>%; height: 18px; background-color: #ff9800;}
.barm3-1 {width: <?php echo $avgMENU1; ?>%; height: 18px; background-color: #f44336;}

.barm4-5 {width: <?php echo $avgTIME5; ?>%; height: 18px; background-color: #4CAF50;}
.barm4-4 {width: <?php echo $avgTIME4; ?>%; height: 18px; background-color: #2196F3;}
.barm4-3 {width: <?php echo $avgTIME3; ?>%; height: 18px; background-color: #00bcd4;}
.barm4-2 {width: <?php echo $avgTIME2; ?>%; height: 18px; background-color: #ff9800;}
.barm4-1 {width: <?php echo $avgTIME1; ?>%; height: 18px; background-color: #f44336;}

.barm5-5 {width: <?php echo $avgVENTILATION5; ?>%; height: 18px; background-color: #4CAF50;}
.barm5-4 {width: <?php echo $avgVENTILATION4; ?>%; height: 18px; background-color: #2196F3;}
.barm5-3 {width: <?php echo $avgVENTILATION3; ?>%; height: 18px; background-color: #00bcd4;}
.barm5-2 {width: <?php echo $avgVENTILATION2; ?>%; height: 18px; background-color: #ff9800;}
.barm5-1 {width: <?php echo $avgVENTILATION1; ?>%; height: 18px; background-color: #f44336;}

.barm6-5 {width: <?php echo $avgHYGIENE5; ?>%; height: 18px; background-color: #4CAF50;}
.barm6-4 {width: <?php echo $avgHYGIENE4; ?>%; height: 18px; background-color: #2196F3;}
.barm6-3 {width: <?php echo $avgHYGIENE3; ?>%; height: 18px; background-color: #00bcd4;}
.barm6-2 {width: <?php echo $avgHYGIENE2; ?>%; height: 18px; background-color: #ff9800;}
.barm6-1 {width: <?php echo $avgHYGIENE1; ?>%; height: 18px; background-color: #f44336;}


.barm7-5 {width: <?php echo $avgSTAFF5; ?>%; height: 18px; background-color: #4CAF50;}
.barm7-4 {width: <?php echo $avgSTAFF4; ?>%; height: 18px; background-color: #2196F3;}
.barm7-3 {width: <?php echo $avgSTAFF3; ?>%; height: 18px; background-color: #00bcd4;}
.barm7-2 {width: <?php echo $avgSTAFF2; ?>%; height: 18px; background-color: #ff9800;}
.barm7-1 {width: <?php echo $avgSTAFF1; ?>%; height: 18px; background-color: #f44336;}



/* Individual bars SPORTS */
.bars1-5 {width: <?php echo $avgi5; ?>%; height: 18px; background-color: #4CAF50;}
.bars1-4 {width: <?php echo $avgi4; ?>%; height: 18px; background-color: #2196F3;}
.bars1-3 {width: <?php echo $avgi3; ?>%; height: 18px; background-color: #00bcd4;}
.bars1-2 {width: <?php echo $avgi2; ?>%; height: 18px; background-color: #ff9800;}
.bars1-1 {width: <?php echo $avgi1; ?>%; height: 18px; background-color: #f44336;}

.bars2-5 {width: <?php echo $avgo5; ?>%; height: 18px; background-color: #4CAF50;}
.bars2-4 {width: <?php echo $avgo4; ?>%; height: 18px; background-color: #2196F3;}
.bars2-3 {width: <?php echo $avgo3; ?>%; height: 18px; background-color: #00bcd4;}
.bars2-2 {width: <?php echo $avgo2; ?>%; height: 18px; background-color: #ff9800;}
.bars2-1 {width: <?php echo $avgo1; ?>%; height: 18px; background-color: #f44336;}




/* Individual bars LIB  */
.barl1-5 {width: <?php echo $avgb5; ?>%; height: 18px; background-color: #4CAF50;}
.barl1-4 {width: <?php echo $avgb4; ?>%; height: 18px; background-color: #2196F3;}
.barl1-3 {width: <?php echo $avgb3; ?>%; height: 18px; background-color: #00bcd4;}
.barl1-2 {width: <?php echo $avgb2; ?>%; height: 18px; background-color: #ff9800;}
.barl1-1 {width: <?php echo $avgb1; ?>%; height: 18px; background-color: #f44336;}

.barl2-5 {width: <?php echo $avgj5; ?>%; height: 18px; background-color: #4CAF50;}
.barl2-4 {width: <?php echo $avgj4; ?>%; height: 18px; background-color: #2196F3;}
.barl2-3 {width: <?php echo $avgj3; ?>%; height: 18px; background-color: #00bcd4;}
.barl2-2 {width: <?php echo $avgj2; ?>%; height: 18px; background-color: #ff9800;}
.barl2-1 {width: <?php echo $avgj1; ?>%; height: 18px; background-color: #f44336;}

.barl3-5 {width: <?php echo $avgm5; ?>%; height: 18px; background-color: #4CAF50;}
.barl3-4 {width: <?php echo $avgm4; ?>%; height: 18px; background-color: #2196F3;}
.barl3-3 {width: <?php echo $avgm3; ?>%; height: 18px; background-color: #00bcd4;}
.barl3-2 {width: <?php echo $avgm2; ?>%; height: 18px; background-color: #ff9800;}
.barl3-1 {width: <?php echo $avgm1; ?>%; height: 18px; background-color: #f44336;}

.barl4-5 {width: <?php echo $avgl5; ?>%; height: 18px; background-color: #4CAF50;}
.barl4-4 {width: <?php echo $avgl4; ?>%; height: 18px; background-color: #2196F3;}
.barl4-3 {width: <?php echo $avgl3; ?>%; height: 18px; background-color: #00bcd4;}
.barl4-2 {width: <?php echo $avgl2; ?>%; height: 18px; background-color: #ff9800;}
.barl4-1 {width: <?php echo $avgl1; ?>%; height: 18px; background-color: #f44336;}

.barl5-5 {width: <?php echo $avgd5; ?>%; height: 18px; background-color: #4CAF50;}
.barl5-4 {width: <?php echo $avgd4; ?>%; height: 18px; background-color: #2196F3;}
.barl5-3 {width: <?php echo $avgd3; ?>%; height: 18px; background-color: #00bcd4;}
.barl5-2 {width: <?php echo $avgd2; ?>%; height: 18px; background-color: #ff9800;}
.barl5-1 {width: <?php echo $avgd1; ?>%; height: 18px; background-color: #f44336;}




/* Individual bars GEN */
.barg1-5 {width: <?php echo $avgb5; ?>%; height: 18px; background-color: #4CAF50;}
.barg1-4 {width: <?php echo $avgb4; ?>%; height: 18px; background-color: #2196F3;}
.barg1-3 {width: <?php echo $avgb3; ?>%; height: 18px; background-color: #00bcd4;}
.barg1-2 {width: <?php echo $avgb2; ?>%; height: 18px; background-color: #ff9800;}
.barg1-1 {width: <?php echo $avgb1; ?>%; height: 18px; background-color: #f44336;}

.barg2-5 {width: <?php echo $avgj5; ?>%; height: 18px; background-color: #4CAF50;}
.barg2-4 {width: <?php echo $avgj4; ?>%; height: 18px; background-color: #2196F3;}
.barg2-3 {width: <?php echo $avgj3; ?>%; height: 18px; background-color: #00bcd4;}
.barg2-2 {width: <?php echo $avgj2; ?>%; height: 18px; background-color: #ff9800;}
.barg2-1 {width: <?php echo $avgj1; ?>%; height: 18px; background-color: #f44336;}

.barg3-5 {width: <?php echo $avgm5; ?>%; height: 18px; background-color: #4CAF50;}
.barg3-4 {width: <?php echo $avgm4; ?>%; height: 18px; background-color: #2196F3;}
.barg3-3 {width: <?php echo $avgm3; ?>%; height: 18px; background-color: #00bcd4;}
.barg3-2 {width: <?php echo $avgm2; ?>%; height: 18px; background-color: #ff9800;}
.barg3-1 {width: <?php echo $avgm1; ?>%; height: 18px; background-color: #f44336;}



/* Individual bars COMP */
.barc1-5 {width: <?php echo $avgh5; ?>%; height: 18px; background-color: #4CAF50;}
.barc1-4 {width: <?php echo $avgh4; ?>%; height: 18px; background-color: #2196F3;}
.barc1-3 {width: <?php echo $avgh3; ?>%; height: 18px; background-color: #00bcd4;}
.barc1-2 {width: <?php echo $avgh2; ?>%; height: 18px; background-color: #ff9800;}
.barc1-1 {width: <?php echo $avgh1; ?>%; height: 18px; background-color: #f44336;}

.barc2-5 {width: <?php echo $avgh5; ?>%; height: 18px; background-color: #4CAF50;}
.barc2-4 {width: <?php echo $avgh4; ?>%; height: 18px; background-color: #2196F3;}
.barc2-3 {width: <?php echo $avgh3; ?>%; height: 18px; background-color: #00bcd4;}
.barc2-2 {width: <?php echo $avgh2; ?>%; height: 18px; background-color: #ff9800;}
.barc2-1 {width: <?php echo $avgh1; ?>%; height: 18px; background-color: #f44336;}

.barc3-5 {width: <?php echo $avgh5; ?>%; height: 18px; background-color: #4CAF50;}
.barc3-4 {width: <?php echo $avgh4; ?>%; height: 18px; background-color: #2196F3;}
.barc3-3 {width: <?php echo $avgh3; ?>%; height: 18px; background-color: #00bcd4;}
.barc3-2 {width: <?php echo $avgh2; ?>%; height: 18px; background-color: #ff9800;}
.barc3-1 {width: <?php echo $avgh1; ?>%; height: 18px; background-color: #f44336;}

.barc4-5 {width: <?php echo $avgh5; ?>%; height: 18px; background-color: #4CAF50;}
.barc4-4 {width: <?php echo $avgh4; ?>%; height: 18px; background-color: #2196F3;}
.barc4-3 {width: <?php echo $avgh3; ?>%; height: 18px; background-color: #00bcd4;}
.barc4-2 {width: <?php echo $avgh2; ?>%; height: 18px; background-color: #ff9800;}
.barc4-1 {width: <?php echo $avgh1; ?>%; height: 18px; background-color: #f44336;}

.barc5-5 {width: <?php echo $avgh5; ?>%; height: 18px; background-color: #4CAF50;}
.barc5-4 {width: <?php echo $avgh4; ?>%; height: 18px; background-color: #2196F3;}
.barc5-3 {width: <?php echo $avgh3; ?>%; height: 18px; background-color: #00bcd4;}
.barc5-2 {width: <?php echo $avgh2; ?>%; height: 18px; background-color: #ff9800;}
.barc5-1 {width: <?php echo $avgh1; ?>%; height: 18px; background-color: #f44336;}


/*  bars HOSTEL */
.barh1-5 {width: <?php echo $avgAccommodation5; ?>%; height: 18px; background-color: #4CAF50;}
.barh1-4 {width: <?php echo $avgAccommodation4; ?>%; height: 18px; background-color: #2196F3;}
.barh1-3 {width: <?php echo $avgAccommodation3; ?>%; height: 18px; background-color: #00bcd4;}
.barh1-2 {width: <?php echo $avgAccommodation2; ?>%; height: 18px; background-color: #ff9800;}
.barh1-1 {width: <?php echo $avgAccommodation1; ?>%; height: 18px; background-color: #f44336;}

.barh2-5 {width: <?php echo $avgYOGA5; ?>%; height: 18px; background-color: #4CAF50;}
.barh2-4 {width: <?php echo $avgYOGA4; ?>%; height: 18px; background-color: #2196F3;}
.barh2-3 {width: <?php echo $avgYOGA3; ?>%; height: 18px; background-color: #00bcd4;}
.barh2-2 {width: <?php echo $avgYOGA2; ?>%; height: 18px; background-color: #ff9800;}
.barh2-1 {width: <?php echo $avgYOGA1; ?>%; height: 18px; background-color: #f44336;}

.barh3-5 {width: <?php echo $avgTelephone5; ?>%; height: 18px; background-color: #4CAF50;}
.barh3-4 {width: <?php echo $avgTelephone4; ?>%; height: 18px; background-color: #2196F3;}
.barh3-3 {width: <?php echo $avgTelephone3; ?>%; height: 18px; background-color: #00bcd4;}
.barh3-2 {width: <?php echo $avgTelephone2; ?>%; height: 18px; background-color: #ff9800;}
.barh3-1 {width: <?php echo $avgTelephone1; ?>%; height: 18px; background-color: #f44336;}

.barh4-5 {width: <?php echo $avgMedical5; ?>%; height: 18px; background-color: #4CAF50;}
.barh4-4 {width: <?php echo $avgMedical4; ?>%; height: 18px; background-color: #2196F3;}
.barh4-3 {width: <?php echo $avgMedical3; ?>%; height: 18px; background-color: #00bcd4;}
.barh4-2 {width: <?php echo $avgMedical2; ?>%; height: 18px; background-color: #ff9800;}
.barh4-1 {width: <?php echo $avgMedical1; ?>%; height: 18px; background-color: #f44336;}

.barh5-5 {width: <?php echo $avgLAB5; ?>%; height: 18px; background-color: #4CAF50;}
.barh5-4 {width: <?php echo $avgLAB4; ?>%; height: 18px; background-color: #2196F3;}
.barh5-3 {width: <?php echo $avgLAB3; ?>%; height: 18px; background-color: #00bcd4;}
.barh5-2 {width: <?php echo $avgLAB2; ?>%; height: 18px; background-color: #ff9800;}
.barh5-1 {width: <?php echo $avgLAB1; ?>%; height: 18px; background-color: #f44336;}

.barh6-5 {width: <?php echo $avgLaundry5; ?>%; height: 18px; background-color: #4CAF50;}
.barh6-4 {width: <?php echo $avgLaundry4; ?>%; height: 18px; background-color: #2196F3;}
.barh6-3 {width: <?php echo $avgLaundry3; ?>%; height: 18px; background-color: #00bcd4;}
.barh6-2 {width: <?php echo $avgLaundry2; ?>%; height: 18px; background-color: #ff9800;}
.barh6-1 {width: <?php echo $avgLaundry1; ?>%; height: 18px; background-color: #f44336;}


.barh7-5 {width: <?php echo $avgStationary5; ?>%; height: 18px; background-color: #4CAF50;}
.barh7-4 {width: <?php echo $avgStationary4; ?>%; height: 18px; background-color: #2196F3;}
.barh7-3 {width: <?php echo $avgStationary3; ?>%; height: 18px; background-color: #00bcd4;}
.barh7-2 {width: <?php echo $avgStationary2; ?>%; height: 18px; background-color: #ff9800;}
.barh7-1 {width: <?php echo $avgStationary1; ?>%; height: 18px; background-color: #f44336;}


.barh8-5 {width: <?php echo $avgGames5; ?>%; height: 18px; background-color: #4CAF50;}
.barh8-4 {width: <?php echo $avgGames4; ?>%; height: 18px; background-color: #2196F3;}
.barh8-3 {width: <?php echo $avgGames3; ?>%; height: 18px; background-color: #00bcd4;}
.barh8-2 {width: <?php echo $avgGames2; ?>%; height: 18px; background-color: #ff9800;}
.barh8-1 {width: <?php echo $avgGames1; ?>%; height: 18px; background-color: #f44336;}


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
<center><span class="heading"><h3>HOSTEL RATING</h3></span></center>

<span class="heading">1.Accommodation rating</span>

<p> average based on <?php echo $totcountAccommodation; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountAccommodation5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountAccommodation4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountAccommodation3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountAccommodation2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh1-1"></div>
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
    <div class="bar-container">
      <div class="barh2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountYOGA5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountYOGA4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountYOGA3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountYOGA2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh2-1"></div>
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
    <div class="bar-container">
      <div class="barh3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTelephone5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTelephone4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTelephone3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTelephone2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh3-1"></div>
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
    <div class="bar-container">
      <div class="barh4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMedical5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMedical4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMedical3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMedical2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh4-1"></div>
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
    <div class="bar-container">
      <div class="barh5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLAB5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLAB4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLAB3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLAB2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh5-1"></div>
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
    <div class="bar-container">
      <div class="barh5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLaundry5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLaundry4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barh-container">
      <div class="bar5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLaundry3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barh-container">
      <div class="bar5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountLaundry2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barh-container">
      <div class="bar5-1"></div>
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
    <div class="barh-container">
      <div class="bar5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountStationary5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barh-container">
      <div class="bar5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountStationary4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barh-container">
      <div class="bar5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountStationary3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barh-container">
      <div class="bar5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountStationary2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barh-container">
      <div class="bar5-1"></div>
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
    <div class="bar-container">
      <div class="barh5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barh5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountGames1; ?></div>
  </div>
</div>


<center><span class="heading"><h3>SPORTS RATING</h3></span></center>

<span class="heading">1.Facilities For Indoor Games</span>

<p> average based on <?php echo $totcounti; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti1; ?></div>
  </div>
</div>
<br>
<span class="heading">2.Facilities For Outdoor Games</span>

<p> average based on <?php echo $totcounto; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bars2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto1; ?></div>
  </div>
</div>

<br>


<center><span class="heading"><h3> MESS RATING</h3></span></center>

<span class="heading">1.FOOD rating</span>

<p> average based on <?php echo $totcountFOOD; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFOOD5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFOOD4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFOOD3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFOOD2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm1-1"></div>
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
    <div class="bar-container">
      <div class="barm2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountWATER5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountWATER4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountWATER3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountWATER2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm2-1"></div>
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
    <div class="bar-container">
      <div class="barm3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMENU5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMENU4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMENU3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountMENU2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm3-1"></div>
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
    <div class="bar-container">
      <div class="barm4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm4-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountTIME1; ?></div>
  </div>
</div>


<span class="heading">4.VENTILATION  rating</span>

<p> average based on <?php echo $totcountVENTILATION; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountVENTILATION1; ?></div>
  </div>
</div>



<span class="heading">5.HYGIENE rating</span>

<p> average based on <?php echo $totcountHYGIENE; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHYGIENE5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHYGIENE4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHYGIENE3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHYGIENE2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-1"></div>
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
    <div class="bar-container">
      <div class="barm5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barm5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSTAFF1; ?></div>
  </div>
</div>




<center><span class="heading"><h3>LIBRARY RATING</h3></span></center>

<span class="heading">1.Books rating</span>

<p> average based on <?php echo $totcountb; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb1; ?></div>
  </div>
</div>
<br>
<span class="heading">2.Jouranl rating</span>

<p> average based on <?php echo $totcountj; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj1; ?></div>
  </div>
</div>

<br>

<span class="heading">3.Material rating</span>

<p> average based on <?php echo $totcountm; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm1; ?></div>
  </div>
</div>


<br>
<span class="heading">4.Library Furniture rating</span>

<p> average based on <?php echo $totcountl; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl4-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl1; ?></div>
  </div>
</div>
<br>

<span class="heading">5.Digital Library Facility rating</span>

<p> average based on <?php echo $totcountd; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barl5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd1; ?></div>
  </div>
</div>



<center><span class="heading"><h3>general RATING</h3></span></center>

<span class="heading">1.First Aid Medical Facilities Rating</span>

<p> average based on <?php echo $totcountb; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb1; ?></div>
  </div>
</div>
<br>
<span class="heading">2.Transport rating</span>

<p> average based on <?php echo $totcountj; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj1; ?></div>
  </div>
</div>

<br>

<span class="heading">3.Classroom  rating</span>

<p> average based on <?php echo $totcountm; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barg3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm1; ?></div>
  </div>
</div>



<center><span class="heading"><h3>LABORATORY RATING</h3></span></center>

<span class="heading">1.Hardware rating</span>

<p> average based on <?php echo $totcountSOFT; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT1; ?></div>
  </div>
</div>

<span class="heading">1.Hardware rating</span>

<p> average based on <?php echo $totcountFIRE; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE1; ?></div>
  </div>
</div>



<span class="heading">1.Hardware rating</span>

<p> average based on <?php echo $totcountINTER; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER1; ?></div>
  </div>
</div>



<span class="heading">1.Hardware rating</span>

<p> average based on <?php echo $totcountPOWER; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc4-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER1; ?></div>
  </div>
</div>


<span class="heading">1.Hardware rating</span>

<p> average based on <?php echo $totcounth; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounth5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounth4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounth3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounth2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barc5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounth1; ?></div>
  </div>
</div>




<center><span class="heading"><h3>bus RATING</h3></span></center>

<span class="heading">1.bus rating</span>

<p> average based on <?php echo $totcountb; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb1; ?></div>
  </div>
</div>
<br>
<span class="heading">2.Jouranl rating</span>

<p> average based on <?php echo $totcountj; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj1; ?></div>
  </div>
</div>

<br>

<span class="heading">3.bus condition rating</span>

<p> average based on <?php echo $totcountm; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm1; ?></div>
  </div>
</div>


<br>
<span class="heading">4.bus Furniture rating</span>

<p> average based on <?php echo $totcountl; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar4-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl1; ?></div>
  </div>
</div>
<br>

</body>
</html>