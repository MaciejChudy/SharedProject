<?php
    include 'db.inc.php';

    $cipher = 'AES-128-CBC';
    $key = 'sharedproject2022';
    $iv = 'randomvaluechudy';

    $Username = openssl_encrypt($_POST['uname'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $Password = $_POST['psw'];
    $StudentNumber = openssl_encrypt($_POST['snumber'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $EmailAddress = openssl_encrypt($_POST['email'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $PhoneNumber = openssl_encrypt($_POST['phnumber'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $DOB = openssl_encrypt($_POST['dob'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $Photo = $_POST['photo'];
    $MedicalDeclaration = $_POST['med'];
    $MedicalConditions = openssl_encrypt($_POST['medcond'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $DoctorName = openssl_encrypt($_POST['docname'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $DoctorPhoneNumber = openssl_encrypt($_POST['docpn'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $NextOfKinName = openssl_encrypt($_POST['kinname'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $NextKinPN = openssl_encrypt($_POST['kinpn'], $cipher, $key, OPENSSL_RAW_DATA, $iv);

    $hashpw = hash('sha3-512', $Password, true);

    $sql = "insert into accounts(Username, Password, StudentNumber, EmailAddress, PhoneNumber, DOB, Photo, MedicalDeclaration, MedicalConditions, DoctorName, DoctorPhoneNumber, NextOfKinName, NextOfKinPhoneNumber) values('$Username','$hashpw','$StudentNumber','$EmailAddress','$PhoneNumber','$DOB','$_POST[photo]','$_POST[med]','$MedicalConditions','$DoctorName','$DoctorPhoneNumber','$NextOfKinName','$NextKinPN')";

    if(!mysqli_query($con,$sql))
    {
    die("An Error in the SQL Query; ");
    } else {
        echo "Inputted into database";
    }
        

?>