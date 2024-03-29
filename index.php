<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - TopUp Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2><img src="topup.png" class="pic" style="width: 80%;
													margin-left: 5%;
													justify-content: center;
													margin-bottom: -20%;
													margin-top: -20%;
													"></h2>
													
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
        
     	<button type="submit">Login</button>
		<a href="signup.php" class="ca">Create an Account</a>
     </form>
</body>
</html>