<?php
    session_start();
	require('../Utilities/_ConnectDatabase.php');
    if(!isset($_SESSION['User']))
    {
        echo"<script>
        let confirmation = confirm('You are not loged in. Do you want to login again','Yes');
            if(confirmation)
            {
                window.location = `/Jewellery%20Shop/Utilities/login page.php?access=user`;    
                exit();    
            }

            else
            {
                window.location= `index.php`;    
                exit();
            }
        </script>";
    }

	else 
	{
	   $Username = $_SESSION['User'];
	   $query = "select * from cartdetails where Username like '$Username'";	
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Bootstrap/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/cart page.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
	<title>Shopping cart</title>

    <style type="text/css">
    
    </style>

</head>
<body>
     <div class="cart-page">
     	<h1>Shopping cart</h1>
     	<div class="cart-details">
        <?php
			$query = mysqli_query($user,$query);
			$rows = mysqli_num_rows($query);
			if($rows > 0)
			{
				echo"
				  <center><table class='table table-striped' style='padding-left: 100px;padding-right: 20px;text-align: center;'>
						<tr>
							<th>Sno</th>
							<th>P-id</th>
							<th>P-name</th>
							<th>P-size</th>
							<th>P-price</th>
							<th>Quantity</th>
						</tr>";
     	
				$i = 0;
						while($associate = mysqli_fetch_assoc($query))
						{
							$i++;
						    echo "<tr>
									<td width='8%'>$i</td>
									<td width='8%'>".$associate['Pid']."</td>
									<td width='20%'>".$associate['Pname']."</td>
									<td width='20%'>".$associate['Size']."</td>
									<td width='15%'>".$associate['Price']."</td>
									<td width='auto'>".$associate['Qty']."</td>
								</tr>";
						}

						echo "</table></center>";
						echo "<center><button class='btn btn-primary' id='submit'>Order Now</button>
						<button class='btn btn-secondary' id='reset'>Remove All</button></center>";
					}
     	          
                    else
				    {
					  echo "  
						<div class='empty-cart'>
							<center><img src='../Images/Cart/cart3.png' width='30%' height='auto' style='border-radius: 10px;'></center>
							<h1 style='text-decoration: none;color: darkgray;'>Your cart is currently empty!</h1>
							<a href='index.php'><center><button class='btn btn-secondary' style='padding-left: 20px;padding-right: 20px;'>Shop now</button></center></a>
						</div>";
                    }
					
					?>
		</div>
		
     </div>
</body>
<script src="../Bootstrap/Js/bootstrap.bundle.min.js"></script>
 <script>
	 document.getElementById('submit').onclick = funorder;
	 document.getElementById('reset').onclick = funcancel;

	 function funorder() 
	 {
	   window.location = `order_cancel.php?order=true`; 	
	 }

	 function funcancel()
	 {
        window.location = `order_cancel.php`;
	 }
 </script>
</html>