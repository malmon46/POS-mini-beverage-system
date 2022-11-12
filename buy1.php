
<html>
<center>
<div class="headers">
<br>
<br>
<h1 style = 'color:white; text-shadow: 0 1px 1px rgba(2, 2, 2, .95);'> BEVERAGE SIMPLE POS SYSTEM </h1>
</div>
<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		 <link rel = "stylesheet" href = "css/style.css" />
		 <link rel = "stylesheet" href = "css/css.css" />
		 <link rel = "shortcut icon" href = "image/xx.jpg" />
		</head>
<body id = 'header3' onload = 'saves()'> 
<center>
<div class = "body" >
<ul class="sf-menu">
   <li class="current">

				<a href="Add New.php"><accr title = "Add New Beverage "><b>Add New Beverage</b></accr>
				</a>
				<li class="current">
				<a href="current.php"><accr title = "Add Previous Beverage "><b>Add Previous Beverage</b></accr>
				</a>
			  <li class="current">
				<a href="buy.php"><accr title = "Purchase Beverage "><b>Purchase Beverage</b></accr>
				</a>
				  <li class="current">
				<a href="#a.php"><accr title = "Purchased Beverage"><b>Purchased Beverage</b></accr>
				</a>
					<ul class="sf-menu">

					<a href="daily.php" title = "Daily">Daily</a>
					<a  href="monthly.php" title = "Monthly">Monthly</a>
				
					</ul>
				
				
					  <li class="current">
				<a href="#a.php"><b></b></accr>
				</a>
				<li class="current">
				<a href="index.php"><accr title = "logout"><b>Logout</b></accr>
				</a>
			</li>
			</ul>

<br>
</center>
<div class="rain1">
<div class="border start">
<?php

include('dbcon.php');
if(isset($_GET['product_no']))
{
 $product_no=$_GET['product_no'];
 
 $result3 = mysql_query("SELECT * FROM products  where product_no = '$product_no'");
 $foundnum3 = mysql_num_rows ($result3);

 
 
if($foundnum3>0)
{

	while($row = mysql_fetch_array($result3))
		{
	       
		   $product_no = $row['product_no'];
		   $product_name = $row['product_name'];
		   $size = $row['size'];
		   $quantity = $row['quantity'];
		   $price = $row['price'];
		   $total_price = $row['total_price'];
				
		
		  
		} 

}


}

 ?>
<form action="buy2.php" method="Post" name ="frmMain1">
<br>
<center>
<br>
<font color = "dimgray" ><b><h3>Purchase Products</h3></b></font>
<div class="header1">
&nbsp;
</div>

<input type='text' id = 'buttd' readonly value ='Beverage No' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'  name='product_no' id = 'butt' readonly value = <?php echo $product_no; ?>>
<div class="header1">
&nbsp;
</div>
<input type='text' name='name1' id = 'buttd' readonly value ='Beverage' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='product_name' required placeholder = 'Enter Name of Beverage Here !!..'  id = 'butt' value = <?php echo $product_name; ?>> <br>
<div class="header1">
&nbsp;
</div>

<div class="header1">
&nbsp;
</div>
<input type='text' name='asda' id = 'buttd' readonly value ='Size' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='size'   id = 'butt' readonly value = <?php echo $size; ?>> <br> 
<div class="header1">
&nbsp;
</div>
<input type='text' id = 'buttd'  readonly value ='New Quantity Left' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='quantity' onkeypress  = 'saves()' onkeyup  = 'saves()' onmouseover  = 'saves()'  id = 'butt' placeholder = 'Enter Quantity Here !!..' value = <?php echo $quantity; ?>> <br> 
<input type='text' id = 'buttd' hidden  readonly name = 'quantity1' value = <?php echo $quantity; ?>>
<div class="header1">
&nbsp;
</div>
<input type='text' id = 'buttd'  readonly value ='Quantity To Buy' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='quantity2' onkeypress  = 'saves()' onkeyup  = 'saves()' onmouseover  = 'saves()'  id = 'butt' placeholder = 'Enter Quantity To Add Here !!..'> <br> 
<div class="header1">
&nbsp;
</div>
<input type='text' name='' id = 'buttd' readonly value ='Price.' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='price' onkeypress  = 'saves()' onkeyup  = 'saves()' onmouseover  = 'saves()'   maxlength = '11'  id = 'butt' placeholder = 'Enter Price Here !!..' value = <?php echo $price; ?> readonly> <br> 
<div class="header1">
&nbsp;
</div>
<center>
Cashier
</center>
<div class="header1">
&nbsp;
</div>
<input type='text' name='' id = 'buttd' readonly value ='Total Price (BALAYRAN)' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='total_price'  maxlength = '11'  id = 'butt' readonly value = <?php echo $total_price; ?>> <br> 
<input type='text' name='' id = 'buttd' readonly value ='Enter Amount.' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='amount'  maxlength = '11'  id = 'butt' placeholder = 'Enter Amount Here !!..' onkeypress  = 'saves()' onkeyup  = 'saves()' onmouseover  = 'saves()'> <br> 
<input type='text' name='' id = 'buttd' readonly value ='Change.'  >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='change'  maxlength = '11'  id = 'butt' readonly placeholder = 'Change'>
<div class="header1">
&nbsp;
</div>
<br>
<input type='text'  hidden  required name='date_purchased'  maxlength = '11'  id = 'butt' readonly value = '<?php echo $Today = date('M.d, Y'); ?>'>
<input type='text'  hidden  required name='day'  maxlength = '11'  id = 'butt' readonly value = '<?php echo $Today = date('d'); ?>'>
<input type='text' hidden   required name='month'  maxlength = '11'  id = 'butt' readonly value = '<?php echo $Today = date('M'); ?>'>
<br>
<input type='submit' onmouseover = 'saves()' hidden  name = 'saved' value='SUBMIT' disabled id = 'buttons' title = 'ADD NEW PRODUCTS'>

<br>
<br>
</center>

</div>
</div>
</form>

</div>
</body>
<script type="text/javascript">

function saves()
{

		var a = document.frmMain1.quantity.value;
	
	   if(document.frmMain1.quantity2.value == '')
		
		{
			document.frmMain1.total_price.value = "";
			document.frmMain1.quantity.value = document.frmMain1.quantity1.value ;
		}
		
		else  if(a < 0)
		
		{
			alert('Not Enough quantity to buy');
			document.frmMain1.quantity.value = document.frmMain1.quantity1.value ;
			document.frmMain1.quantity2.value = "";
		
		}
		
	    else if(isNaN(document.frmMain1.quantity2.value))
		
		{
			document.frmMain1.total_price.value = "";
			document.frmMain1.quantity2.value = "";

		}
		else if(isNaN(document.frmMain1.price.value))
		
		{
			document.frmMain1.total_price.value = "";
			document.frmMain1.price.value = "";
		}
		else 

		{
		
		document.frmMain1.quantity.value = parseInt(document.frmMain1.quantity1.value) - parseInt(document.frmMain1.quantity2.value);
		document.frmMain1.total_price.value = document.frmMain1.quantity2.value * document.frmMain1.price.value;
		
		}
		
		
		
		document.frmMain1.change.value = parseInt(document.frmMain1.amount.value) - parseInt(document.frmMain1.total_price.value);
		
	   var b = 	document.frmMain1.change.value;
	   
		if(document.frmMain1.amount.value == '')
		
		{
			document.frmMain1.change.value = "Please Enter Amount";
				document.frmMain1.saved.disabled = true;
			document.frmMain1.saved.hidden = true;

		}
		
		else if(isNaN(document.frmMain1.amount.value))
		
		{
			document.frmMain1.change.value = "";
			document.frmMain1.amount.value = "";
				document.frmMain1.saved.disabled = true;
			document.frmMain1.saved.hidden = true;
		}
		
		else if(b < 0)
		
		{
			document.frmMain1.change.value = "Insufficient Amount";
			document.frmMain1.saved.disabled = true;
			document.frmMain1.saved.hidden = true;
			
		}
		else if(b >= 0)

		{
		
		    document.frmMain1.saved.disabled = false;
			document.frmMain1.saved.hidden = false;
	
		}
		

}
</script>

<style type="text/css">

      	.border,
			.rain{
	
				width: 540px;

			}

			   .border{
				padding: 0px;
				height:auto;
                      }

			.border{
			   
			   background: lightgray;
			   border:1px solid black;

			}
  
      #button{
	  
	            color:	 dimgray;
                border-radius: 1px;
		        border: 1px solid #ddd;
				padding: 4px;
				font-weight: lighter;
				margin-top: 4px; margin-bottom: 4px; margin-left: 4px; margin-right: 4px; width: 264px;
				
			}
			
			
  #button:hover{
	            color:			 black;
				padding: 4px;
				font-weight: lighter;
				border: 1px solid #ddd;
			}
 #button:focus{
                 border: 1px solid #ddd;
	            color:			 black;
				padding: 4px;
				font-weight: lighter;
			}
   
  </style>

</center>
</html>



