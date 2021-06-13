<!doctype html>
<html>
<body>
<form method="post"><br><br>
    Enter the item Names : <input type="text" name="items" /><br><br>
    Enter the item price : <input type="text" name="prices" /><br><br>
    <input type="reset" value="Reset" />
    <input type="submit" name="submit" value="Submit" /><br><br>
</form>

<?php
    if (isset($_POST['submit']))
    {     
       $item = $_POST['items'];
       $items = explode(',',$item);
       $price = $_POST['prices'];
       $prices = explode(',',$price);
       $final = array_combine($items, $prices);
       echo   '<table border="1">';
       echo    "<tr><th>".'Item Name'.
               "</th><td>".'Item Price'."</th></tr>";
        foreach( $final as  $name => $value)
        {
          echo "<tr><th>".htmlspecialchars($name).
               "</th><td>".htmlspecialchars($value)."</th></tr>";
        }
        echo '</table>';
        $maxIndex = array_search(max($final),$final); 
        echo '<br> Coastliest item is :<strong>'.$maxIndex.'</strong><br>';
        $minIndex = array_search(min($final), $final); 
        echo 'Cheapest item is : <strong>'.$minIndex.'</strong><br>' ;
    }
?>
</body>
</html>

