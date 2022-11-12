<?php
include('dbcon.php');

$product_no = $_POST['product_no'];
$product_name=$_POST['product_name'];
$size=$_POST['size'];
$quantity=$_POST['quantity'];
$quantity2=$_POST['quantity2'];
$price=$_POST['price'];
$total_price=$_POST['total_price'];


	 
	 include('current.php');
	  
	mysql_query("UPDATE products SET quantity = '$quantity', price = '$price', total_price = '$total_price' WHERE product_no = '$product_no'");

	   echo("<script> 
		alert('$quantity2 quantity of $product_name added to list.')
		</script> ");



?>