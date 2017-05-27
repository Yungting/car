<?php

$link=mysqli_connect("localhost", "root", "c194xo4", "car");
mysqli_query("SET NAMES'utf8'");


$car_brand=implode(" ",$_POST["car_brand"]);
$seat=implode(" ",$_POST["seat"]);
$car_price=$_POST["car_price"];
$car_pay=implode(" ",$_POST["car_pay"]);
$supply_date=$_POST["supply_date"];
$supply_time=$_POST["supply_time"];
$back_date=$_POST["back_date"];
$back_time=$_POST["back_time"];

extract($_REQUEST);

$file=$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$file);   // 搬移上傳檔案


$sql="INSERT INTO supply(brand, seat, price, pay, supply_date, supply_time, back_date, back_time, image) VALUE ('$car_brand', '$seat', '$car_price', '$car_pay', '$supply_date', '$supply_time','$back_date', '$back_time', '$file')";

mysqli_query($link, $sql);


header("Location: showdata.php");


