<!doctype html>
	<html>
	<head>
	</head>
	<body>
	    <form method="post">
	    <input type="number" name="number">
	    <input type="submit" name="submit">
	    </form>
		<?php
			if(isset($_POST['submit']))
			{
			    $number =$_POST['number'];
			    $a= $number;
			    $sum= 0;
			    while ($a != 0)
			    {
			        $rem =$a % 10;
			        $sum = $sum + ($rem *$rem*$rem);
			        $a = $a/10;
			    }
			    if($number== $sum)
			        echo "$number is an armstrong number";
			    else
			        echo "$number is not an armstrong number";
			}
		?>
	</body>
	</html>

