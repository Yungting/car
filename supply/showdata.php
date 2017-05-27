<?php

header("Content-Type:text/html; charset=utf-8");


$link=mysqli_connect('localhost', 'root', 'c194xo4');

mysqli_select_db($link, 'car');

$sql="SELECT * FROM supply";

$result=mysqli_query($link, $sql);

echo "<table border=1>";

echo "<tr>";
echo "<td>編號</td>";
echo "<td>品牌</td>";
echo "<td>幾人座車</td>";
echo "<td>可提供時間(開始)</td>";
echo "<td>可提供時間(結束)</td>";
echo "<td>價錢(24小時)</td>";
echo "<td>付款方式</td>";
echo "<td>圖片</td>";
echo "</tr>";

while($row=mysqli_fetch_assoc($result)){
         echo "<tr>";
         echo "<td>".$row["NO"]."</td>";
  	 echo "<td>".$row["brand"]."</td>";
         echo "<td>".$row["seat"]."</td>";
         echo "<td>".$row["supply_date"]."  ".$row["supply_time"]."</td>";
         echo "<td>".$row["back_date"]."  ".$row["back_time"]."</td>";
         echo "<td>".$row["price"]."</td>";
         echo "<td>".$row["pay"]."</td>";
	 echo "<td>" 	?>
	<img src="images/"<?php echo $row['image']?>>
<?php
         echo "</tr>";
}
