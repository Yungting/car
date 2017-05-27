<?php

header("Content-Type:text/html; charset=utf-8");

$link=mysqli_connect('localhost', 'root', 'c194xo4');

mysqli_select_db($link, 'car');

$sql="SELECT * FROM rent";	//選擇所有rent欄位

$result=mysqli_query($link, $sql);	//執行SQL查詢


echo "<table border=1>";

echo "<tr>";
echo "<td>編號</td>";
echo "<td>需要幾人座的車子</td>";
echo "<td>租借日期</td>";
echo "<td>租借時間</td>";
echo "<td>還車日期</td>";
echo "<td>還車時間</td>";
echo "<td>金額上限</td>";
echo "<td>付款方式</td>";



while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row["NO"]."</td>";
	echo "<td>".$row["seat"]."</td>";
	echo "<td>".$row["rent_date"]."</td>";
	echo "<td>".$row["rent_time"]."</td>";
	echo "<td>".$row["back_date"]."</td>";
	echo "<td>".$row["back_time"]."</td>";
	echo "<td>".$row["rent_price"]."</td>";
	echo "<td>".$row["rent_pay"]."</td>";

	echo "</tr>";
}

?>
