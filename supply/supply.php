<html>
	<head>
		<meta charset="UTF-8" />
                <title>提供</title>
	</head>
	
	<body>

		<h1>提供車子</h1>
		<form action="savedata.php" method="post" enctype="multipart/form-data">

		車子品牌：<select name="car_brand[]">
				<option value="volkswagen">福斯</option>
				<option value="toyota">豐田</option>
				<option value="mitsubishi">三菱</option>
				<option value="hyundai">現代</option>
		  	  </select><br>	

		幾人座：<select name="seat[]">
                                 <option value="5">5人坐</option>
                                 <option value="7">7人坐</option>
                        </select><br>


		價格：<input type="number" name="car_price">元<br>

		
		可租借時段：<input type="date" name="supply_date"><input type="time" name="supply_time"> - 
			    <input type="date" name="back_date"><input type="time" name="back_time"><br>


		付款方式：<input type="checkbox" name="car_pay[]" value="ATM">實體ATM轉帳
 			  <input type="checkbox" name="car_pay[]" value="meeting">面交<br>


		上傳圖片：<input type="file" name="image">

		
		<input type="submit" name="send" value="送出">

		</form>

	</body>
</html>

