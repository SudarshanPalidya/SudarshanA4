<!doctype html>
  <html>
<body> 
<form method="post">
Enter The Previous Reading :<input type="text" name="prev"/><br><br>
Enter The Current Reading :<input type="text" name="curr"/><br><br>
<input type="submit" name="submit" value="submit" /> <br/> <br/>
</form>
</body>
<?php
if (isset($_POST['submit'])){
  $pre = $_POST['prev'];
  $cur = $_POST['curr'];
  $total = $pre + $cur;
  if($total < 100)
  {
      $amount = $total * 3;
  }
  elseif($total > 100 && $total < 200 )
  {
     $amount = $total * 4;
  }
  elseif($total > 200 && $total < 300 )
  {
     $amount = $total * 5;
  }
  else
  {
    $amount = $total * 6;
  }
  echo 'Electricity amount is '.$amount;
}  
?>
</html>
