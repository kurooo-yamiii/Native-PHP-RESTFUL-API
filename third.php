<?php
include 'db_conn.php';
if (isset($_GET['username']))  {
?>

<!DOCTYPE html>
<html>
<head>
	<title>ROX Diamond 199</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="firsttrans.php" method="post">
     	<h2><img src="topup.png" class="pic" style="margin-top: -20%; margin-bottom: -20%;"></h2>
<?php
       $username = $_GET['username'];
       $sql = "SELECT * FROM user WHERE username = '$username'";
       $result =  mysqli_query($conn, $sql);
       if(!$result)
       {
        die(mysqli_error($conn));
       }
       if (mysqli_num_rows($result) > 0) {
       $rowData = mysqli_fetch_array($result);
       }
       $ign = $rowData['ign'];
?>
        <div style="margin-bottom: 2%;">
     	<label style="margin-right: 3%;">IGN:</label>
     	<?php echo $rowData['ign'] ?><br>
         </div>

        <div style="margin-bottom: 2%;">
     	<label>Email:</label>
     	<?php echo $rowData['username'] ?><br>
         </div>

         <div style="margin-bottom: 2%;">
     	<label style="margin-right: 2.5%;">Item:</label>
     	<?php echo "RoX: Next Generation 599 Diamonds (Sale)" ?><br>
         </div>
        
         <div style="margin-bottom: 2%;">
     	<label style="margin-right: 2%;">Total:</label>
     	<?php echo "₱650" ?><br>
         </div>

         <div style="display: flex; justify-content: center; align-items: center; margin-top: 4%; margin-bottom: 2%;">
         <img style="width: 50%;
                     margin-bottom: 5px;
                     justify-content: center; align-items: center;" 
              src="diamond.webp">
         </div>

        
        <?php
    
       $sql2 = "SELECT * FROM item WHERE code = 3";
       $result2 =  mysqli_query($conn, $sql2);
       if(!$result2)
       {
        die(mysqli_error($conn));
       }
       if (mysqli_num_rows($result2) > 0) {
       $rowData2 = mysqli_fetch_array($result2);
       }
       
       ?>
         
      <input type="hidden" 
                  name="code"
                  id="code"  
                  value="<?=$rowData2['code']?>"
                  hidden
           >
           
       <input type="hidden" 
                  name="item"
                  id="item"  
                  value="<?=$rowData2['item']?>"
                  hidden
           >
      

       <input type="hidden" 
                  name="redeem" 
                  id="redeem"
                  value="<?=$rowData2['redeem'] ?>"
                  hidden
           >
      

       <input type="hidden" 
                  name="price" 
                  id="price"
                  value="<?=$rowData2['price'] ?>"
                  hidden
           >
     
       
       <input type="hidden" 
              name="username" 
              id="username"
              value="<?=$username ?>"
              hidden
           >
       
           <input type="hidden" 
              name="ign"
              id="ign" 
              value="<?=$ign ?>"
              hidden
           >
   
         
     	<button type="submit" name="buy" class="btn btn-primary" style="justify-content: center; align-items: center; width: 95%; margin-top: 5%; padding-top: 3%; padding-bottom: 3%; background-color: navy;">Gcash</button>
         <button type="submit" name="buy"  class="btn btn-primary" style="justify-content: center; align-items: center; width: 95%; margin-top: 2%; padding-top: 3%; padding-bottom: 3%; background-color: darkgreen;">PayPal</button>
         <button type="submit" name="buy" class="btn btn-primary" style="justify-content: center; align-items: center; width: 95%; margin-top: 2%; padding-top: 3%; padding-bottom: 3%; background-color: darkorange;">Paymaya</button>
    
        </form>
</body>
</html>
<?php
}else{
    header("Location first.php?id=1");
}
?>