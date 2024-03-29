<?php 
include "firsttrans.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation of Transaction</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
</head>
<body style="background:#262931;">
     <form action="user.php">
     	<h2><img src="topup.png" class="pic" style="margin-top: -15%; margin-bottom: -15%;"></h2>
         <?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
                
         <button type="submit" class="btn btn-primary" style="justify-content: center; align-items: center; width: 100%; margin-top: 2%; padding-top: 3%; padding-bottom: 3%; background-color: darkorange;">Confirm Transaction</button>
    
        </form>
</body>
</html>
