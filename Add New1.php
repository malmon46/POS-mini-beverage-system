<?php
include('dbcon.php');

$product_no = $_POST['product_no'];
$product_name=$_POST['product_name'];
$size=$_POST['size'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$total_price=$_POST['total_price'];



 $result = mysql_query("SELECT * FROM products WHERE product_name='$product_name'");
 $foundnum = mysql_num_rows ($result);
 
 
 if($foundnum == 0)
 
	{
	 
	 include('Add New.php');
	  
	mysql_query("INSERT INTO products(product_no, product_name, size, quantity, price, total_price)
	VALUES ('','$product_name','$size','$quantity', '$price','$total_price')");

	   echo("<script> 
		alert('$product_name is now successfully addedd.')
		</script> ");

	}
	else

	{
 
		include('Add New.php');
	 
	   echo("<script> 
		alert('$product_name was already exist.')
		</script> ");
	 
	}

?>