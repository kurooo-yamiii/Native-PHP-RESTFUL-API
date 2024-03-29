<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['repassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $repass = validate($_POST['repassword']);
    $name = validate($_POST['name']);
    $userdata = 'uname='. $uname. '&name='. $name;

	if (empty($uname)) {
		header("Location: signup.php?error=Username is required&$userdata");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$userdata");
	    exit();
	}else if(empty($repass)){
        header("Location: signup.php?error=Re-type Password is required&$userdata");
	    exit();
	}else if(empty($name)){
        header("Location: signup.php?error=Name is required&$userdata");
	    exit();
	}else if(($pass != $repass)){
        header("Location: signup.php?error=Password and Re-type Password didn't match&$userdata");
	    exit();
	}else{
		// $pass = md5($pass); Use this for Encryption
        $sql = "SELECT * FROM user WHERE username ='$uname' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The Username is already taken try another&userdata");
            exit();
        }else{
            $sql2 = "INSERT INTO user(username, password, admin, ign) VALUES('$uname', '$pass', 0, '$name')";
            $result2 = mysqli_query($conn, $sql2);
            if($result2){
                header("Location: signup.php?success=Your account has been registered Sucessfully");
            }else{
                header("Location: signup.php?error=Unknown Error Occurred&userdata");
            }

        }
	}
	
}else{
	header("Location: signup.php");
	exit();
}