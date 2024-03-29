<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Username is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass && $row['admin'] == 1) {
            	$_SESSION['Username'] = $row['username'];
            	$_SESSION['Name'] = $row['ign'];
            	$_SESSION['Password'] = $row['password'];
            	header("Location: admin.php?username=$uname");
		        exit();
            }
            elseif ($row['username'] === $uname && $row['password'] === $pass && $row['admin'] == 0) {
            	$_SESSION['Username'] = $row['username'];
            	$_SESSION['Name'] = $row['ign'];
            	$_SESSION['Password'] = $row['password'];
            	header("Location: user.php?username=$uname");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Username or Password");
		        exit();
			}
          
        
		}else{
			header("Location: index.php?error=Incorect Username or Password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}