<!-- Check access -->
<?php
  require('../Utilities/_ConnectDatabase.php');
  session_start();
  if(!isset($_SESSION['User']) && $_GET['login'] != 'once')
  {
    header("location: /Jewellery%20Shop/Admin/index.php");    
    exit();
  }
  if(isset($_GET['logout']))
  {
    session_unset();
    header("location: /Jewellery%20Shop/Admin/index.php");    
    exit();
  }
?>

<!-- fetch details from database -->
<?php
   $query = "select * from Userdetails";
   $Total_User = mysqli_num_rows(mysqli_query($user,$query));

   $query = "select * from querydetails";
   $Total_Query = mysqli_num_rows(mysqli_query($user,$query));

   $query = "select * from orderdetails";
   $query = mysqli_query($user,$query);
   $i = 1;
   while($associate = mysqli_fetch_assoc($query))
   {
      if($associate['Orderid'] == $i)
      {
          $i++;
      }
   }
   $Total_Order = $i-1;

   $query = "select * from Itemdetails";
   $Total_Item = mysqli_num_rows(mysqli_query($user,$query));
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-page</title>
    <link rel="stylesheet" href="../Css/navbar.css">
    <link rel="stylesheet" href="../Css/navbaradminconf.css">
    <link rel="stylesheet" href="../Css/home_page.css">
    <link rel="stylesheet" href="../Css/footer.css">
  </head>
  <body>
     <?php require('../Utilities/_navbar.php');?>
     <!-- body  -->
     <div class="body">
        <div class="bodycontent">
          <div class="boxes box1">
              <div class="boximg">
                 <img src="../Images/Admin Home Page/Dash User.png" alt="image">
              </div>
              <div class="boxetext">
                 <h4><?php echo $Total_User;?></h4>
                 <a href="user page.php"><p>Total Users</p></a>
              </div>
          </div>
          <div class="boxes box2">
              <div class="boximg">
                 <img src="../Images/Admin Home Page/Dash Query.png" alt="image">
              </div>
              <div class="boxetext">
                 <h4><?php echo $Total_Query;?></h4>
                 <a href="queries.php"><p>Users Queries</p></a>
              </div>
          </div>
          <div class="boxes box3">
              <div class="boximg">
                 <img src="../Images/Admin Home Page/Dash Order.png" alt="image">
              </div>
              <div class="boxetext">
                 <h4><?php echo $Total_Order;?></h4>
                 <a href="order page.php"><p>Total Orders</p></a>
              </div>
          </div>
          <div class="boxes box4">
              <div class="boximg">
                 <img src="../Images/Admin Home Page/Dash Item.png" alt="image">
              </div>
              <div class="boxetext">
                 <h4><?php echo $Total_Item;?></h4>
                 <a href="category page.php?redirect=all&value=all"><p>Total Items</p></a>
              </div>
          </div>
          <div class="boxes box5">
              <div class="boximg">
                 <img src="../Images/Admin Home Page/Dash Add Item.png" alt="image">
              </div>
              <div class="boxetext">
                <a href="add item.php"><h4>Add Item</h4></a>
              </div>
          </div>
        </div>
     </div>
     <?php require('../Utilities/_footer.php');?> 
  </body>
<script>
    <?php require('../Javascript/navbaradminconf.php');?> 
</script>
</html>