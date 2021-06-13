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
    		$number=$_POST['number'];
    		echo "Reverse of the given number is :".strrev($number);
    	?>
    	<br/>
       	<?php
    		if($number==strrev($number))
    			echo "It is a Palindrome";
    		else
    			echo "Not Palindrome";
    	}
    ?>
	</body>
	</html>


