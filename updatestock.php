<?php
if(isset($_POST['update'])){
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $code = validate($_POST['code']);
	$stock = validate($_POST['stock']);
    


	if (empty($code)) {
		header("Location: re-stock.php?code=$code&error=Stock quantity is required");
	}else {
     
       
       $sql = "UPDATE item
               SET stock='$stock'
               WHERE code=$code";
    
       $result = mysqli_query($conn, $sql);

       if ($result) {
       	  header("Location: admin.php?success=Selected stock is successfully Updated");
       }else {
          header("Location: re-stock.php?code=$code?error=unknown error occurred");
       }
	}
}else{
    header("Location re-stock.php");
}