<?php
include('dbcon.php');

if(isset($_POST['del']))
{


$product_no = $_GET['product_no'];
$product_name=$_POST['product_name'];
$size=$_POST['size'];
$quantity=$_POST['quantity'];
$quantity2=$_POST['quantity2'];
$price=$_POST['price'];
$total_price=$_POST['total_price'];
$amount=$_POST['amount'];
$change=$_POST['Change'];
$day=$_POST['day'];
$month=$_POST['month'];
$date_purchased=$_POST['date_purchased'];


	 
header('location:daily.php');
	  
mysql_query("DELETE * FROM buyed WHERE month = '$month' AND day = '$day'");

}



?>