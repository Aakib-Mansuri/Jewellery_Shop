<!-- Check access -->
<?php
  require('../Utilities/_ConnectDatabase.php');
  require('../Utilities/loginaccess.php');
?>

<?php
	$query = "select * from Userdetails";	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Bootstrap/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/navbar.css">
    <link rel="stylesheet" href="../Css/navbaradminconf.css">
    <link rel="stylesheet" href="../Css/user_page.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <title>Users-details</title>

</head>
<body>
<?php require('../Utilities/_navbar.php');?>
<!-- body -->
<body class="body">
     <div class="cart-page">
     	<h1>Users Details</h1>
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
							<th>Identity</th>
							<th>Name</th>
							<th>Address</th>
							<th>Username</th>
							<th>Password</th>
						</tr>";
     	
                        $i = 1;
				        while($associate = mysqli_fetch_assoc($query))
						{
						    echo "<tr>
									<td width='8%'>$i</td>
									<td width='8%'>".$associate['Identity']."</td>
									<td width='20%'>".$associate['Name']."</td>
									<td width='20%'>".$associate['Address']."</td>
									<td width='15%'>".$associate['Username']."</td>
									<td width='auto'>".$associate['Password']."</td>
								</tr>";
                                $i++;
						}

						echo "</table></center>";
					}
     	          
                    else
				    {
					  echo "  
						<div class='empty-cart'>
							<h1 style='text-decoration: none;color: darkgray;'>No Users available!</h1>
						</div>";
                    }
					
					?>
		</div>
	</div>
</body>
<?php require('../Utilities/_footer.php');?>
</body>
<script src="../Bootstrap/Js/bootstrap.bundle.min.js"></script>
<script>
    <?php require('../Javascript/navbaradminconf.php');?>
</script>
</html>