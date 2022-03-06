<?php
    include 'db.inc.php';
    
    $Password = $_POST['psw'];

    $cipher = 'AES-128-CBC';
    $key = 'sharedproject2022';
    $iv = 'randomvaluechudy';

    $Username = openssl_encrypt($_POST['uname'], $cipher, $key, OPENSSL_RAW_DATA, $iv);
    $hashpw = hash('sha3-512', $Password, true);
 
    $sql = "SELECT * FROM accounts WHERE Username ='$Username' AND Password ='$hashpw'";
	
	if(!mysqli_query($con,$sql)){
        die("No username or password found.");
    } else {
        echo "Redirecting.....";
        header("Location: loggedin.html");
        exit();
    }    
?>      