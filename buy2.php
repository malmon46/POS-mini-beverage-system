<?php
include('dbcon.php');

$product_no = $_POST['product_no'];
$product_name=$_POST['product_name'];
$size=$_POST['size'];
$quantity=$_POST['quantity'];
$quantity2=$_POST['quantity2'];
$price=$_POST['price'];
$total_price=$_POST['total_price'];
$amount=$_POST['amount'];
$change=$_POST['change'];
$day=$_POST['day'];
$month=$_POST['month'];
$date_purchased=$_POST['date_purchased'];


	 
	include('buy1.php');
	  
	mysql_query("UPDATE products SET quantity = '$quantity', price = '$price' WHERE product_no = '$product_no'");
	
	mysql_query("INSERT INTO buyed(id,product_no, product_name, size, quantity, price, total_price, amount, changed, date_purchased, day, month)
	VALUES ('','$product_no','$product_name','$size','$quantity2', '$price','$total_price','$amount','$change','$date_purchased','$day','$month')");
	
	echo("<script> 
		alert('$product_name($quantity2) is now purchased.')
		</script> ");



?>