
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
<?php
	
	include('dbcon.php');  
  
    $result3 = mysql_query("SELECT * FROM products ORDER By product_no ASC");
    $foundnum3 = mysql_num_rows ($result3);
	 
	while($row2 = mysql_fetch_array($result3))
	$product_no=$row2['product_no'];

?>
<br>
<br>
<br>

<form action="Add New1.php" method="Post" name ="frmMain1">
<center>
<div class="rain1">
<div class="border start">
<br>
<font color = "dimgray" ><b><h3>Add New Beverage</h3></b></font>
<div class="header1">
&nbsp;
</div>

<input type='text' id = 'buttd' readonly value ='Beverage No' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'  name='product_no' id = 'butt' readonly>
<input type='text' name='id1' hidden id = 'buttd'  readonly value = <?php echo $product_no;  ?>>
<div class="header1">
&nbsp;
</div>
<input type='text' name='name1' id = 'buttd' readonly value ='Beverage' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='product_name' required placeholder = 'Enter Name of Beverage Here !!..'  id = 'butt'> <br>
<div class="header1">
&nbsp;
</div>

<input type='text' name='asda' id = 'buttd' readonly value ='Size' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name = 'size' id = 'butt' required>
<option></option>
<option>Small</option>
<option>Medium</option>
</select>
<div class="header1">
&nbsp;
</div>
<input type='text' id = 'buttd'  readonly value ='Quantity' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='quantity' onkeypress  = 'saves()' onkeyup  = 'saves()' onmouseover  = 'saves()'  id = 'butt' placeholder = 'Enter Quantity Here !!..' > <br> 
<div class="header1">
&nbsp;
</div>
<input type='text' name='' id = 'buttd' readonly value ='Price.' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='price' onkeypress  = 'saves()' onkeyup  = 'saves()' onmouseover  = 'saves()'   maxlength = '11'  id = 'butt' placeholder = 'Enter Price Here !!..'> <br> 
<div class="header1">
&nbsp;
</div>
<input type='text' name='' id = 'buttd' readonly value ='Total Price.' >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text'    required name='total_price'  maxlength = '11'  id = 'butt' readonly> <br> 
<div class="header1">
&nbsp;
</div>
<br>
<br>
<input type='submit' onmouseover = 'saves()' name = 'saved' value='SUBMIT' id = 'buttons' title = 'ADD NEW PRODUCTS'>

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
	
		if(document.frmMain1.id1.value == '')
		
		{
			document.frmMain1.product_no.value = "1";
		}
		
		else
		{
			document.frmMain1.product_no.value = parseInt(document.frmMain1.id1.value) + 1;
		}
		
		
		if(isNaN(document.frmMain1.quantity.value))
		
		{
			document.frmMain1.total_price.value = "";
			document.frmMain1.quantity.value = "";
		}
		else if(isNaN(document.frmMain1.price.value))
		
		{
			document.frmMain1.total_price.value = "";
			document.frmMain1.price.value = "";
		}
		else
		{
		document.frmMain1.total_price.value = document.frmMain1.quantity.value * document.frmMain1.price.value;
		
		}
		

}
</script>

<style type="text/css">

      	.border,
			.rain{
	
				width: 540px;

			}

			   .border{
				padding: 2px;
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



