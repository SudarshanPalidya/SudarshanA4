<!doctype html>
<html>
<body>
<?php
    echo "Fibonacci series is: ";
    $n = 10;
    $num1 = 0;
    $num2 = 1;
    $counter = 0;
    $a=array();
    while ($counter < $n)
    {
        echo ' '.$num1;
        if(checkPrime($num1))
            array_push($a, $num1);
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
    function checkPrime($num)
    {
       if ($num == 0 || $num == 1)
            return 0;
       for ($i = 2; $i <= $num/2; $i++)
       {
          if ($num % $i == 0)
            return 0;
       }
        return 1;
    }
    echo '<br/>Prime Numbers are:';
    foreach ($a as $arr) 
    {
        echo $arr. " ";
    }
?>
</body>
</html>
