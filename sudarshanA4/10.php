<!doctype html>
<html>
<body>
<center>
<form  method="POST" >
<br><br>
<input type="text" name="string" placeholder="Enter string" value="" /><br><br><br>
<b><label for="string">Choose an option  : </label><br><br></b>
<input type="radio" name="op" value="1"> Reversing the string<br><br>
<input type="radio" name="op" value="2"> Finding the length of the string<br><br>
<input type="radio" name="op" value="3"> Substring operations<br><br>
<input type="radio" name="op" value="4"> Converting to uppercase<br><br>
<input type="radio" name="op" value="5"> Converting to lowercase<br><br>
<input type="radio" name="op" value="6"> Counting the number of words<br><br>
<input type="submit" name="submit" value="submit"><br><br>
</form>
<?php
    if (isset($_POST['submit'])){
         $str = $_POST['string'];
         $choice = $_POST['op'];
         switch($choice)
         {
              case 1 :  echo 'Reverse of '.$str. ' is '.strrev($str);
                        break;
              case 2 :  echo 'Length of '.$str. ' is '.strlen($str);
                        break;
              case 3 :  echo 'Substr of '.$str. ' to 1 to 3 is '.substr($str,2,5);
                        break;
              case 4 :  echo 'Uppercase of '.$str. ' is '.strtoupper($str);
                        break;
              case 5 :  echo 'Lowercase of '.$str. ' is '.strtolower($str);
                        break;
              case 6 :  echo 'Number of words in '.$str. ' is '.str_word_count($str);
                        break;
        }
    }
?>
</center>
</body>
</html>