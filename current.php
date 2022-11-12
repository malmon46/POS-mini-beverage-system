<html>
<center>
<div class="headers">
<br>
<br>
<h1 style = 'color:white; text-shadow: 0 1px 1px rgba(2, 2, 2, .95);'> COCA-COLA COMPANY </h1>
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
<form action="current.php" method="Post" name ="frmMain1">
<br>
<font  color = "dimgray"><b><h3>Add Recent Product</h3></b></font>
<font color = 'dimgray'>
Search:&nbsp;&nbsp;
</font>
<input type="text"required placeholder = "search Beverage name or Beverage no" name="g" id = "but2" title = 'Filter by id Beverage name or Beverage no.'>
<input type='submit' value='Search' name = 'search' id = 'button1'/>
<br>
<br>
<table class  = "table table-bordered">
 <thead>
<tr>
<div class="header1">
</div>
<th>Barcode</th>
<th>Softdrinkname</th>
<th>Size</th>
<th>Quantity</th>
<th>Price</th>
<th>Total Price</th>
<th>Action</th>

</tr>

<div class="header1">
</div>

 <?php

include('dbcon.php');
if(isset($_POST['search']))
{
 $g=$_POST['g'];
 
 $result3 = mysql_query("SELECT * FROM products  WHERE product_no = '$g' or product_name = '$g' order by product_no ASC");
 $foundnum3 = mysql_num_rows($result3);

 
 
if($foundnum3>0)
{

	while($row = mysql_fetch_array($result3))
		{
	
				
			  echo '<tr>';
			  echo '<td><div align="center">'.$row['product_no'].'</div></td>';
			  echo '<td><div align="center">'.$row['product_name'].'</div></td>';
			  echo '<td><div align="center">'.$row['size'].'</div></td>';
			  echo '<td><div align="center">'.$row['quantity'].'</div></td>';
			  echo '<td><div align="center">'.$row['price'].'</div></td>';
			  echo '<td><div align="center">'.$row['total_price'].'</div></td>';
			  echo '<td><a href=current1.php?product_no='.$row["product_no"].'><input type="button" value="Add" id = "buttons" title = "Add Quantity">'.'</a></td>';
			  echo'<tr>';
		  
		} 

}


}

 ?>

</table>
</center>	
<style type="text/css">

      	.border,
			.rain{
	
				width: 700px;

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
	  
	            color:			 dimgray;
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
</div>
</div>
</body>
</div>
</form>
</div>
</div>
</div>
</center>
</html>
