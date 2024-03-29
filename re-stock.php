<?php 
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>TechList - AIS Update PC</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<form action="updatestock.php" 
		      method="post">
            
		   <h4 class="display-4 text-center"><img src="topup.png" class="pic"></h4><hr><br>
		   <?php
       
           if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>

           <input type="text" 
                  name="code" 
                  value="<?=$_GET['code'];?>"
                  hidden
           >
           <?php
                $code = $_GET['code'];
                $sql = "SELECT * FROM item WHERE code = '$code'";
                $result =  mysqli_query($conn, $sql);
                if(!$result)
                {
                    die(mysqli_error($conn));
                }
                if (mysqli_num_rows($result) > 0) {
                $rowData = mysqli_fetch_array($result);
                }
            ?>
             
             <div style="display: flex; justify-content: center; align-items: center; margin-top: -3%; margin-bottom: 2%;">
                <img style="width: 50%;
                     justify-content: center; align-items: center;" 
                src="diamond.webp">
             </div>

             <div class="form-group">
		     <label for="item" style="margin-bottom: -5%;">Item:</label>
		     <?php echo $rowData['item'] ?><br>
		   </div>

		   <div class="form-group">
		     <label for="stock" style="margin-bottom: -1%; margin-top: -5%;">Stock</label>
		     <input 
                   type="text" 
		           id="stock" 
		           name="stock" 
		           value="<?=$rowData['stock']?>" 
		           >
		   </div>
            <div style="margin-bottom: 10%;"></div>
		   <button type="submit" 
		          class="btn btn-primary"
		          name="update"
				  style="background-color: grey; color: white; border-color: grey;">Update</button>
		    <a href="admin.php" class="link-main" style="color: grey; margin-left: 3%;">View</a>
	    </form>
</body>
</html>