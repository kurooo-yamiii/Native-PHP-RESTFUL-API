<?php  

include "db_conn.php";


$sql = "SELECT * FROM item ORDER BY code ASC";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM networth WHERE branch ='Antipolo'";
$result2 =  mysqli_query($conn, $sql2);
if(!$result2)
{
die(mysqli_error($conn));
}
if (mysqli_num_rows($result2) > 0) {
$rowData2 = mysqli_fetch_array($result2);
}

$sql3 = "SELECT * FROM transaction  ORDER BY transactionid ASC";
$result3 = mysqli_query($conn, $sql3);