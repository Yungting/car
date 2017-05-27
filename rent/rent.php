<html>

	<head>
		<meta charset="UTF-8" />
  		<title>租車</title>
	</head>

	<body>
		<h1>租車委託</h1><br><br>
		<form action="savedata.php" method="post">
		幾人坐：<select name="seat[]">
				<option value="5">5人坐</option>
				<option value="7">7人坐</option>
			</select><br>

		租車日期：<input name="rent_date" type="date">
		租車時間：<input name="rent_time" type="time"><br>
                租車日期：<input name="back_date" type="date">
                租車時間：<input name="back_time" type="time"><br>

		價格上限(24小時為一單位)：0元 - <select name="rent_price">
		<option value="500">500元</option>
		<option value="1000">1000元</option>
		<option value="1500">1500元</option>
		<option value="2000">2000元</option>
		<option value="2000more">2000元以上</option>
		</select><br>

		付款方式：
		<input type="checkbox" name="rent_pay[]" value="ATM">實體ATM轉帳
		<input type="checkbox" name="rent_pay[]" value="meeting">面交

		<input type="submit" name="send">
		</form>
	</body>


</html>
