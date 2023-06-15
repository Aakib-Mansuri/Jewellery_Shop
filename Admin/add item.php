<!-- Check access -->
<?php
  require('../Utilities/_ConnectDatabase.php');
  require('../Utilities/loginaccess.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item-page</title>
    <link rel="stylesheet" href="../Css/navbar.css">
    <link rel="stylesheet" href="../Css/add_item.css">
    <link rel="stylesheet" href="../Css/navbaradminconf.css">
    <link rel="stylesheet" href="../Css/footer.css">
  </head>
  <body>
     <?php require('../Utilities/_navbar.php');?>
     <!-- body  -->
     <div class="body">
        <div class="bodycontent">
          <form action="add item.php" method="post" enctype="multipart/form-data">
                <h4>ITEM DETAILS</h4>
                <div class="itemname input">
                    <label for="itemname">Item Name:</label>
                    <input type="text" name="itemname" id="itemname" placeholder="Enter item name" required>
                </div>
                <div class="itemdesc input">
                    <label for="itemdesc">Item Description:</label>
                    <input type="text" name="itemdesc" id="itemdesc" placeholder="Enter item description">
                </div>
                <div class="itemmat input">
                   <label for="itemmat">Item Material:</label>
                   <select name="itemmat" id="itemmat" required>
                     <option>Select Material</option>
                     <option value="Diamond">Diamond</option>
                     <option value="Gold">Gold</option>
                     <option value="Silver">Silver</option>
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
                        <option value="Gold Coins">Gold Coins</option>
                        <option value="Earrings">Earrings</option>
                        <option value="Pendants">Pendants</option>
                        <option value="Rings">Rings</option>
                        <option value="Bangles">Bangles</option>
                        <option value="Bracelets">Bracelets</option>
                        <option value="Neckwear">Neckwear</option>
                        <option value="Chains">Chains</option>
                    </select>
                </div>
                <div class="itemgen input">
                    <label for="itemgen">Gender:</label>
                    <select name="itemgen" id="itemgen" required>
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Kids">Kids</option>
                        <option value="Unisex">Unisex</option>
                    </select>
                </div>
                <div class="itemprice input">
                    <label for="itemprice">Item Price:</label>
                    <input type="text" name="itemprice" id="itemprice" placeholder="Enter tax paid price" required>
                </div>
                <div class="iteminv input">
                    <label for="iteminv">Available Inventory:</label>
                    <input type="text" name="iteminv" id="iteminv" placeholder="Enter available inventory" required>
                </div>
                <div class="itemfile">
                  <label for="itemfile">Item Image:</label>
                  <input type="file" id="itemfile" name="itemfile[]" multiple required>
                </div>
                <div class="button">
                    <input type="submit" id="submit" value="Add">
                    <input type="reset" name="reset" id="reset">
                </div>
             </form>
        </div>
     </div>
     <?php require('../Utilities/_footer.php');?> 
  </body>
  <?php
    //Submit data through form
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //Serial Number
        $i=1;
        while(1)
        {
            $query = mysqli_query($user,"select Sno from Itemdetails where Sno like '$i'");
            $rows = mysqli_num_rows($query);
            if($rows == 0)
            {
              $Sno = $i;
              break;
            } 
            $i++;
        }
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
        $query = "insert into itemdetails value ('$Sno','$Name','$Description','$Material','$Size','$Category','$Gender','$Price','$Inventory','$Image')";
        if(mysqli_query($user,$query))
        {
          echo"<script>
                  let confirmation = confirm('Item has been added successfuly. Do you want to add more items','Yes');
                  if(confirmation)
                  {
                     window.location = `/Jewellery%20Shop/Admin/add item.php`;    
                     exit();    
                  }

                  else
                  {
                     window.location= `/Jewellery%20Shop/Admin/home page.php`;    
                     exit();
                  }
               </script>";
        }
        else 
        {
          echo"<script> 
                  alert('There was an error to add item. please retry after some time..!')
              </script>";
        }
    }
  ?>
<script>
  <?php require('../Javascript/navbaradminconf.php');?>
</script>
</html>