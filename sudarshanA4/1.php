<!doctype html>
	<html>
	<head>
	</head>
	<body>
		<p>The Random Number is :
			<?php 
				$number=rand(1,100);
				echo $number;
			?>
		<br/>
		Square Root of the Number is :
			<?php
				echo sqrt($number);
			?>
		</p>
	</body>
	</html>

