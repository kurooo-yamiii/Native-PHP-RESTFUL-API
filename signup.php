<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up - TechList AIS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     <h2><img src="topup.png" class="pic" style="width: 80%;
                                                margin-left: 5%;
                                                justify-content: center;
                                                margin-bottom: -20%;
                                                margin-top: -20%;">
                                                </h2>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

         <?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>

         <label>IGN</label>
         <?php if (isset($_GET['name'])) { ?>
             <input 
             type="text" 
             name="name" 
             placeholder="Name"
             value="<?php echo $_GET['name']; ?>"
             ><br>
     	<?php }else{ ?>
            <input 
            type="text" 
            name="name" 
            placeholder="Name">
            <br>
        <?php }?>
        
        <label>Username</label>
         <?php if (isset($_GET['uname'])) { ?>
             <input 
             type="text" 
             name="uname" 
             placeholder="Username"
             value="<?php echo $_GET['uname']; ?>"
             ><br>
     	<?php }else{ ?>
            <input 
            type="text" 
            name="uname" 
            placeholder="Username">
            <br>
        <?php }?>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

        <label>Re-type Password</label>
     	<input type="password" name="repassword" placeholder="Re-type Password"><br>

     	<button type="submit">Sign Up</button>
		<a href="index.php" class="ca">Already have an Account</a>
     </form>
</body>
</html>