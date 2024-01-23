<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<style type="text/css">
			input[type=text]{
				margin: 10px;
				height: 40px;
				width: 60%;

			}
			input[type=submit]{
				margin: 10px;
				width: 80px;
				height: 30px;
				background-color: blue;
				border-collapse: collapse;
				color: white;
				font-weight: bold;

			}
			body{
				background-color: green;
			}
		</style>
	</head>
	<body>
		<center>
		<form action="#" method="post">
			<input type="text" name="num1" placeholder="Enter Number..."><br>
			<input type="text" name="num2" placeholder="Enter Number..."><br>
			<input type="submit" name="add" value="ADD">
			<input type="submit" name="minus" value="MINUS">
			<input type="submit" name="mul" value="MULTI">
			<input type="submit" name="divide" value="DIVIDE">
		</form>

		<?php
			if (isset($_POST["add"])){
				$num1 = $_POST["num1"];
				$num2 = $_POST["num2"];
				$add = $num1+$num2;
				echo  "The answer is :".$add;
      		}
			if (isset($_POST["minus"])){
				$num3 = $_POST["num1"];
				$num4 = $_POST["num2"];
				$add = $num3-$num4;
				echo  "The answer is :".$add;


			}
		if (isset($_POST["mul"])){
				$num3 = $_POST["num1"];
				$num4 = $_POST["num2"];
				$add = $num3*$num4;
				echo  "The answer is :".$add;


			}
		if (isset($_POST["divide"])){
				$num3 = $_POST["num1"];
				$num4 = $_POST["num2"];
				$add = $num3/$num4;
				echo  "The answer is :".$add;


			}
			

			
		?>
	 </center>
	</body>
</html>