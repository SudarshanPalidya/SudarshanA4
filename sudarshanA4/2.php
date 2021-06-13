<!doctype html>
	<html>
	<head>
	</head>
	<style>
		p{
		    padding:200px;
		    font-size: 80px;
		    color: white;
		}
		body {
		    background: linear-gradient(black,white);
		    height: 650px;
		}
	</style>
	<body>
		<center>
	    <p>
		    <?php 
		    	date_default_timezone_set("Asia/Calcutta");
		     	echo date("h: i : s A"); 
		    ?>
	  	</p>
	</center>
	</body>
	</html>

