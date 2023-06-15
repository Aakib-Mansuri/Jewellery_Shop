<!-- Check access -->
<?php
  require('../Utilities/_ConnectDatabase.php');
  require('../Utilities/loginaccess.php');
?>

<!-- Update Data -->
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $Sno = $_POST['Sno'];
        $Name = $_POST['itemname'];
        $Description = $_POST['itemdesc'];
        $Material = $_POST['itemmat'];
        $Size = [];
        $Category = $_POST['itemcat'];
        $Gender = $_POST['itemgen'];
        $Price = $_POST['itemprice'];
        $Inventory = $_POST['iteminv'];
        $Image = [];

        foreach ($_POST['itemsize'] as $key => $value) 
        {
          $Size[$key] = $value;
        }

        $counter = 1;
        foreach ($_FILES['itemfile']['tmp_name'] as $key => $value) 
        {
          $extension = pathinfo($_FILES['itemfile']['name'][$key],PATHINFO_EXTENSION);
          $New_Path = '../Images/Items/'.$Name.$counter.'.'.$extension;
          $Image[$key] = $New_Path;
          move_uploaded_file($value,$New_Path);
          $counter++;
        }

        $Image = json_encode($Image);
        $Size = json_encode($Size);
        $query = "update itemdetails set Name = '$Name', Description = '$Description', Material = '$Material', Size ='$Size',Category = '$Category', Gender = '$Gender', Price = '$Price', Inventory = '$Inventory', Image = '$Image' where Sno = $Sno";

        if(mysqli_query($user,$query))
        {
          echo"<script>
                  window.location = `/Jewellery%20Shop/Admin/category page.php?redirect=".$_POST['redirect']."&value=".$_POST['value']."`;    
               </script>";
        }
        else 
        {
          echo"<script> alert('There was an error to add item. please retry after some time..!')</script>";
        }
    
    }
?>

<!-- get item -->
<?php
  $Sno = $_GET['EditElement'];
  $query = "select * from Itemdetails where Sno = $Sno";
  $query = mysqli_query($user,$query);
  $associate = mysqli_fetch_assoc($query);
  $Sno = $associate['Sno'];
  $Name = $associate['Name'];
  $Description = $associate['Description'];
  $Material = $associate['Material'];
  $Size = json_decode($associate['Size']);
  $Category = $associate['Category'];
  $Gender = $associate['Gender'];
  $Price = $associate['Price'];
  $Inventory = $associate['Inventory'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit-item</title>
    <link rel="stylesheet" href="../Css/navbar.css">
    <link rel="stylesheet" href="../Css/edit_page.css">
    <link rel="stylesheet" href="../Css/navbaradminconf.css">
    <link rel="stylesheet" href="../Css/footer.css">
  </head>
  <body>
     <?php require('../Utilities/_navbar.php');?>
     <!-- body  -->
     <div class="body">
        <div class="bodycontent">
          <form action="edit page.php" method="post" enctype="multipart/form-data">
                <h4>ITEM DETAILS</h4>
                <input type="hidden" name="redirect" value='<?php echo $_GET['redirect'];?>'>
                <input type="hidden" name="value" value='<?php echo $_GET['value'];?>'>
                <input type="hidden" name="Sno" value='<?php echo $Sno;?>'>
                <div class="itemname input">
                    <label for="itemname">Item Name:</label>
                    <input type="text" name="itemname" id="itemname" placeholder="Enter item name" required value='<?php echo $Name;?>'>
                </div>
                <div class="itemdesc input">
                    <label for="itemdesc">Item Description:</label>
                    <input type="text" name="itemdesc" id="itemdesc" placeholder="Enter item description" value='<?php echo $Description;?>'>
                </div>
                <div class="itemmat input">
                   <label for="itemmat">Item Material:</label>
                   <select name="itemmat" id="itemmat" required>
                     <option>Select Material</option>
                     <option value="Diamond" id="Diamond">Diamond</option>
                     <option value="Gold" id="Gold">Gold</option>
                     <option value="Silver" id="Silver">Silver</option>
                   </select>
                </div>
                <div class="itemsize">
                    Available Size:
                    <input type="checkbox" id="10" name="itemsize[]" value="10"><label for="10">10</label>
                    <input type="checkbox" id="11" name="itemsize[]" value="11"><label for="11">11</label>
                    <input type="checkbox" id="12" name="itemsize[]" value="12"><label for="12">12</label>
                    <input type="checkbox" id="13" name="itemsize[]" value="13"><label for="13">13</label>
                    <input type="checkbox" id="14" name="itemsize[]" value="14"><label for="14">14</label>
                    <input type="checkbox" id="15" name="itemsize[]" value="15"><label for="15">15</label>
                </div>
                <div class="itemcat input">
                    <label for="itemcat">Item Category:</label>
                    <select name="itemcat" id="itemcat" required>
                        <option>Select Category</option>
                        <option value="Gold Coins" id="Gold Coins">Gold Coins</option>
                        <option value="Earrings" id="Earrings">Earrings</option>
                        <option value="Pendants" id="Pendants">Pendants</option>
                        <option value="Rings" id="Rings">Rings</option>
                        <option value="Bangles" id="Bangles">Bangles</option>
                        <option value="Bracelets" id="Bracelets">Bracelets</option>
                        <option value="Neckwear" id="Neckwear">Neckwear</option>
                        <option value="Chains" id="Chains">Chains</option>
                    </select>
                </div>
                <div class="itemgen input">
                    <label for="itemgen">Gender:</label>
                    <select name="itemgen" id="itemgen" required>
                        <option>Select Gender</option>
                        <option value="Male" id="Male">Male</option>
                        <option value="Female" id="Female">Female</option>
                        <option value="Kids" id="Kids">Kids</option>
                        <option value="Unisex" id="Unisex">Unisex</option>
                    </select>
                </div>
                <div class="itemprice input">
                    <label for="itemprice">Item Price:</label>
                    <input type="text" name="itemprice" id="itemprice" placeholder="Enter tax paid price" required value='<?php echo $Price;?>'>
                </div>
                <div class="iteminv input">
                    <label for="iteminv">Available Inventory:</label>
                    <input type="text" name="iteminv" id="iteminv" placeholder="Enter available inventory" required value='<?php echo $Inventory;?>'>
                </div>
                <div class="itemfile">
                  <label for="itemfile">Item Image:</label>
                  <input type="file" id="itemfile" name="itemfile[]" multiple required>
                </div>
                <div class="button">
                    <input type="submit" id="submit" value="Edit">
                    <input type="reset" name="reset" id="reset">
                </div>
             </form>
        </div>
     </div>
     <?php require('../Utilities/_footer.php');?> 
  </body>
 <?php
   echo "<script>";
   echo "document.getElementById('$Material').selected = 'true';";
   echo "document.getElementById('$Category').selected = 'true';";
   echo "document.getElementById('$Gender').selected = 'true';";
   echo "</script>";
   foreach ($Size as $key => $value) 
   {
     echo "<script>document.getElementById('$value').checked = true;</script>";
   }
 ?>
<script>
  <?php require('../Javascript/navbaradminconf.php');?>
</script>
</html>