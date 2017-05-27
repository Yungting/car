<?php

$link=mysqli_connect("localhost", "root", "c194xo4", "car");

if($link){
	echo "yes";
}else{
	echo "no";
}

$seat=implode(" ",$_POST["seat"]);
$rent_date=$_POST["rent_date"];
$rent_time=$_POST["rent_time"];
$back_date=$_POST["back_date"];
$back_time=$_POST["back_time"];
$rent_price=$_POST["rent_price"];
$rent_pay=implode(",",$_POST["rent_pay"]);

$sql="INSERT INTO rent(seat, rent_date, rent_time, back_date, back_time, rent_price, rent_pay) VALUES('$seat', '$rent_date', '$rent_time', '$back_date', '$back_time', '$rent_price', '$rent_pay')";

$result=mysqli_query($link, $sql);

header("Location:showdata.php");



?>
