<!doctype html>
<html>
<head>
</head>
<form method="POST">
<h1>Student Application Form</h1>
<h5>
        First name:
            <input type=text name="fname" required><br/>
        Middle name:
            <input type=text name="mname" required><br/>
        Last name:
            <input type=text name="lname" required><br/>
        Date of Birth:
            <input type=date name="dob" required><br/>
        Gender:
            <input type=radio name="gender" value="Male" checked="true">
        Male
            <input type=radio name="gender" value="Female">
        Female<br/>
        Email:
            <input type=email name="email" required><br/>
        Address:
            <input type=text name="address" required><br/>
        Phone number:
            <input type=number name="phone" required><br/>
        Degree marks(%):
            <input type=number name="degree" required><br/>
        Course studied:
            <input type=radio name="course" value="BCA" checked="true">
        BCA
            <input type=radio name="course" value="BSc">
        BSC
            <input type=radio name="course" value="B.E">
        B.E
            <input type=radio name="course" value="B.Com">
        B.Com<br/>
        Hobbies:
            <input type=checkbox name="Hobbies[]" value="Reading" checked="true">
        Reading
            <input type=checkbox name="Hobbies[]" value="Sports">
        Sports
            <input type=checkbox name="Hobbies[]" value="Dancing">
        Dancing<br/>
        Course Offered:
            <select name="pgcourse">
            <option value="mca">MCA</option>
            <option value="mba">MBA</option>
            <option value="mtech">M.Tech</option>
            <option value="msc">M.Sc</option>
            </select>
        <br/>
        <br/>
        <input type=submit value="submit" name="submit">
        <input type=submit value="reset" name="reset">
    </h5>
    </form>   
<?php
if(isset($_POST['submit']))
{
    function validate()
    {
        $pgcourse=$_POST['pgcourse'];
        $degree=$_POST['degree'];
        $course=$_POST['course'];
        if($pgcourse=='mtech' && ($course=='BCA' || $course=='BSc' || $course=='B.Com' ))
        {
            echo "Only B.E students can applay for M.Tech";
            return 0;
        }
        if(($pgcourse=='msc' || $pgcourse=='mca') && $course=='B.Com')
        {
            echo "Only BCA or BSc students can applay for ".$pgcourse;
            return 0;
        }
        if(($pgcourse=='mca' || $pgcourse=='mtech') && $degree <70)
        {
            echo "You should have more than 70% to applay for ".$pgcourse;
            return 0;
        }
        if($pgcourse=='mba' && $degree <60)
        {
            echo "You should have more than 60% to applay for ".$pgcourse;
            return 0;
        }
        if($pgcourse=='msc' && $degree <40)
        {
            echo "You should have more than 40% to applay for ".$pgcourse;
            return 0;
        }
        return 1;
    }
    if(validate())
    {
        echo "<center>";
        echo "<h1>Student Details</h1>";
        echo "<b>First name:-</b>".$_POST['fname']."<br/>";
        echo "<b>Middle name:-</b>".$_POST['mname']."<br/>";
        echo "<b>Last name:-</b>".$_POST['lname']."<br/>";
        echo "<b>DOB:-</b>".$_POST['dob']."<br/>";
        echo "<b>Gender:-</b>".$_POST['gender']."<br/>";
        echo "<b>Email:-</b>".$_POST['email']."<br/>";
        echo "<b>Address:-</b>".$_POST['address']."<br/>";
        echo "<b>Phone number:-</b>".$_POST['phone']."<br/>";
        echo "<b>Degree (%):-</b>".$_POST['degree']."<br/>";
        echo "<b>Course studied:-</b>".$_POST['course']."<br/>";
        echo "<b>Hobbies:-</b>";
        foreach($_POST['Hobbies'] as $value)
        {
           echo $value.", ";
        }
        echo "br/>";
        echo "<b>Course offered:-</b></font>".$_POST['pgcourse'];
        echo "</center>";
    }
}
?>
</body>
</html>
