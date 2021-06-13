<!doctype html>
<html>
<body>
<form action="" enctype="multipart/form-data" method="post">
    <center><h1>Employee Application Form</h1>
        </center><br>
        <center> 
    <table border=0>
    <tr><td>
        Select img:
        </td>
        <td>
        <input type=file name="file" value="" required>
        </td></tr>
    <tr><td>
        Emp number:
        </td>
        <td>
        <input type=text name="f1" value="" required>
        </td></tr>
        <tr><td>
        First name:
        </td>
        <td>
        <input type=text name="f2" value="" required>
        </td></tr>
        <tr><td>
        Last name:
        </td>
        <td>
        <input type=text name="f3" value="" required>
        </td></tr>
        <tr><td>
        Address:
        </td>
        <td>
        <input type=text name="f4" value="" required>
        </td></tr>
        <tr><td>
        Gender:
        </td>
        <td>
        <input type=radio name="r1" value="Male" required>
        Male
        <input type=radio name="r1" value="Female" required>
        Female
        </td></tr>
        <tr><td>
        Designation:
        </td>
        <td>
        <input type=text name="f5" value="" required>
        </td></tr>
        <tr><td>
        Phone number:
        </td>
        <td>
        <input type=number name="f6" value="" required>
        </td></tr>
        <tr><td>
        Emplloyee Category:
        </td>
        <td>
        <select name="y">
        <option value="Part time">Part time</option>
        <option value="Full time">Full time</option>
        <option value="Contract">Contract</option>
        </select>
        </td></tr>
        <tr><td>
        Basic:
        </td>
        <td>
        <input type=number name="f7" value="" required>
        </td></tr>
        </table>
        </center>
        <br>
        <br>
        <center>
        <input type=submit value="submit" name="s">
        <input type=reset value="reset" name="s1">
        </center>
        </form>   

        <?php
        $da='';  $hra= ''; $gross= ''; $tax = ''; $net='';
if (isset($_POST['s'])){
    $basic= $_POST['f7'];

    //Full time
    if($_POST['y'] == 'Full time'){
if( $basic < 10000)
{
    $da = $basic * 0.45;
    $hra = $basic * 0.10;
    $tax = 0;
}
elseif ($basic >= 10000 && $basic< 50000)
{
    $da = $basic * 0.75;
    $hra = $basic * 0.20;
    $tax = 0;
}
else
{
    $da = $basic * 0.20;
    $hra = $basic * 0.5;
    $tax = 0;
}
$gross = $basic + $da + $hra;
$net= $gross- $da-$hra-$tax;
}
    //Contract
    elseif ($_POST['y'] == 'Contract')
    {
        if( $basic < 5000){
        $da= 200;
        $hra= 0 ;
        $tax = 0;
    }
    elseif ($basic > 5000 && $basic<= 25000)
    {
        $da = $basic * 0.15;
        $hra = 1000;
        $tax= $basic * 0.3;
    }
    else{
        $da = $basic * 0.20;
        $hra = $basic * 0.5;
        $tax = $basic * 0.9;
    }
    $gross = $basic + $da + $hra;
    $net= $gross- $da-$hra-$tax;
    }
   
$a= $_POST['f1']; $b= $_POST['f2']; $c= $_POST['f3']; $d= $_POST['f4'];  $e= $_POST['r1']; 
$f= $_POST['f5'];  $g= $_POST['f6']; $h= $_POST['f7']; $i=$_POST['y'];
$filepath = "imgs/" . $_FILES["file"]["name"];

echo "<center><h1>Employee Details</h1></center>";
if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<center><img src=".$filepath." height=100 width=100 /><center>";
} 
echo "<center><b>Employee number:-</b>".$a."</center>";
echo "<center><b>First name:-</b>".$b."</center>";
echo "<center><b>Last name:-</b>".$c."</center>";
echo "<center><b>Address:-</b>".$d."</center>";
echo "<center><b>Gender:-</b>".$e."</center>";
echo "<center><b>DEsignation:-</b>".$f."</center>";
echo "<center><b>Phone number:-</b>".$g."</center>";
echo "<center><b>Emp category:-</b>".$i."</center>";
echo "<center><b>Basic:-</b>".$h."</center>";
echo "<center><b>Da:-</b>".$da."</center>";
echo "<center><b>Hra:-</b>".$hra."</center>";
echo "<center><b>Tax:-</b>".$tax."</center>";
echo "<center><b>Gross:-</b>".$gross."</center>";
echo "<center><b>Net:-</b>".$net."</center>";
}
?>
</body>
</html>