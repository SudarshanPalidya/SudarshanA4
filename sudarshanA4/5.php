<!doctype html>
    <html>
    <body> 
<h4>1. Addition</h4>
<h4>2. Subtraction</h4>
<h4>3. Multiplication</h4>
<h4>4. Division</h4>
<form method="post">
Enter the 1st Number :<input type="text" name="num1" value="" /> <br/> <br/>
Enter the 2nd Number :<input type="text" name="num2" value="" /> <br/> <br/>
Enter the option :<input type="text" name="option" value="" /> <br/> <br/>
<input type="submit" name="submit" value="submit" /> <br/> <br/>
</form>    
<?php
if (isset($_POST['submit'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $ch = $_POST['option'];
    switch($ch){
        case 1: $r=$a+ $b;
        echo "Addition of two number is: ".$r;
        break;

        case 2: $r=$a- $b;
        echo "Subtraction of two number is: ".$r;
        break;

        case 3: $r=$a* $b;
        echo "Multiplication of two number is: ".$r;
        break;

        case 4: $r=$a / $b;
        echo "Division of two number is: ".$r;
        break;

        default : echo ("Invalid option");
    }
}
?>
</center>
</body>
</html>