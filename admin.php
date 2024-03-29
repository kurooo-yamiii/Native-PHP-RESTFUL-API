<?php 
include "db_conn.php";
session_start();

if (isset($_SESSION['Username']) && isset($_SESSION['Name'])) {

 ?>
 <?php include "stock.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome Admin - <?php echo $_SESSION['Name']; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
	<link rel="stylesheet" href="mama.css">
</head>
<body style="background-color: whitesmoke;">
	
<div class="header">
                <div class="header1" >
                  <a href="index.php"><img class="menu" src="crop.png"></a>
                 </div>
            </div>
            
<div class="allgrid2">

    <div class="box1" style="border-color: black;">
         <div class="centerimg"><img class="picture2" style=" width: 20%;
           margin-bottom: 1px; margin-top: -7%;" src="diamond.webp">
         </div>
                    <p class="label1" style="color: black; text-align: center; font-size: 18px;">Ragnarok X: Next Generation Discount Diamonds (Sale)</p>
                    <p class="label3" style="color: darkgray; text-align: center; font-size: 15px;">Worldwide &#183; Available Now</p>     
    </div>

    <div class="box1" style="border-color: black;">
     
                         <div style="margin-bottom: 2%; text-align: center; font-size: 22px;">
                         <label style="margin-right: 2%; font-size: 32px;">NetWorth:</label>
                         <p style="margin-right: 2%; font-size: 52px;">₱<?php echo $rowData2['income'] ?><br></p>
                         </div>

    </div>
                    
</div>

    </form>
		<section class="section-1">
			
          <h1 style="font-size: 42px; margin-left: 12%; margin-top: 2%; margin-bottom: 2%; width: 80.2%; justify-content: center; align-items: center; text-align: center;"
	     >Ragnarok X: Next Generation Diamond Stock</h1>
		
		<div class="container" id="inventory">
		<div class="box" style="padding-left: 5%;">
			

			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Code</th>
			      <th scope="col">Item</th>
			      <th scope="col">Price</th>
			      <th scope="col">Stock</th>
				  <th scope="col">Redeem</th>
				  <th scope="col">Re-Stock</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['item']?></td>
			      <td><?php echo $rows['price']; ?></td>
				  <td><?php echo $rows['stock']; ?></td>
				  <td><?php echo $rows['redeem']; ?></td>
			      <td><a href="re-stock.php?code=<?=$rows['code']?>" 
			      	     class="btn btn-primary">Update</a>

			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>



<section class="section-1">
			
          <h1 style="font-size: 42px; margin-left: 11%; margin-top: 2%; margin-bottom: 2%; width: 80.2%; justify-content: center; align-items: center; text-align: center;"
	     >List of Transaction</h1>
		
		<div class="container" id="inventory">
		<div class="box" style="padding-left: -1%;">
			

			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Transaction ID</th>
			      <th scope="col">Item</th>
			      <th scope="col">Costumer</th>
			      <th scope="col">IGN</th>
				  <th scope="col">Total</th>
				  <th scope="col">Payment</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows2 = mysqli_fetch_assoc($result3)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?php echo $rows2['item']; ?></td>
				  <td><?php echo $rows2['costumer']; ?></td>
				  <td><?php echo $rows2['ign']; ?></td>
                      <td><?php echo $rows2['total']; ?></td>
                      <td><?php echo $rows2['payment']; ?></td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
               <div style="padding-bottom: 5%;"></div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
