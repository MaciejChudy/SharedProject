<?php
include 'db.inc.php';
echo "The details sent down are: <br>";

echo "First Name is :" . $_POST['firstName'] . "<br>";
echo "Surname is :" . $_POST['lastName'] . "<br>";

$date=date_create($_POST['DOB']);
echo "E-Mail is :" . $_POST['EMail'] . "<br>";
echo "Phone Number is :" . $_POST['PhoneNumber'] . "<br>";

echo "Date of Birth is :" . date_format($date,"d/m/Y") . "<br>";

$sql = "Insert into Persons (firstName,lastName,DOB,EMail,PhoneNumber)
VALUES ('$_POST[firstName]','$_POST[lastName]','$_POST[DOB]','$_POST[EMail]','$_POST[PhoneNumber]')";

if(!mysqli_query($con,$sql))
{
    die("An Error in the SQL Query; ");
}
echo "<br>A record has been added for " .$_POST['firstName'] . " " .$_POST['lastName'] . " " .$_POST['DOB'] . " " .$_POST['EMail'] . " " .$_POST['PhoneNumber'] . ".";

mysqli_close($con);
?>

<form action = "Insert.html" method = "POST">
    <br>
    <input type="submit" value= "Return to Insert Page"/>
</form>    