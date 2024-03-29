<?php 

if (isset($_POST['buy'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
    
 
	$item = validate($_POST['item']);
	$redeem = validate($_POST['redeem']);
    $price = validate($_POST['price']);
    $username = validate($_POST['username']);
    $ign = validate($_POST['ign']);
    $code = validate($_POST['code']);
  
	
       $sql = "SELECT * FROM transaction";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_num_rows( $result );
	   $transactionid = $row + 1;
       
       $sql2 = "INSERT INTO transaction(transactionid, item, costumer, ign, total, payment) 
               VALUES('$transactionid', '$item', '$username', '$ign', '$price', '$price')";
       $result2 = mysqli_query($conn, $sql2);

       $sql3 = "SELECT * FROM networth WHERE branch = 'Antipolo'";
       $result3 =  mysqli_query($conn, $sql3);
       if(!$result3)
       {
        die(mysqli_error($conn));
       }
       if (mysqli_num_rows($result3) > 0) {
       $rowData = mysqli_fetch_array($result3);
       }

       $income = $rowData['income'];
       $networth = intval($income) + intval($price);

       $sql4 = "UPDATE networth
                SET income='$networth'
                WHERE branch='Antipolo'";
       $result4 = mysqli_query($conn, $sql4);

       $sql5 = "SELECT * FROM item WHERE code = '$code'";
       $result5 =  mysqli_query($conn, $sql5);
       if(!$result5)
       {
        die(mysqli_error($conn));
       }
       if (mysqli_num_rows($result5) > 0) {
       $rowData2 = mysqli_fetch_array($result5);
       }
       $stock = $rowData2['stock'];
       $stock = intval($stock) - 1;
       
       if (intval($stock) <= 0){
        header("Location: outstock.php?error=The selected itme is currently out of stock please choose another item in the Menu");
       }else if ($result2) {
        $sql6 = "UPDATE item
                SET stock='$stock'
                WHERE code='$code'";
        $result6 =  mysqli_query($conn, $sql6);
        header("Location: confirmation.php?success=Item is successfully purchased please use this redeem code '$redeem' to recieve the diamonds. Press the button to confirm the transaction");
       }else {
          header("Location: outstock.php?error=Unkown error occured please return to the Menu");
       }
	}

