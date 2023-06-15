<?php
  session_start();
  require('../Utilities/_ConnectDatabase.php');
?>

<!-- Fetch Items -->
<?php
    if(isset($_GET['redirect']) && $_GET['redirect'] == 'search')
    {
         $value = $_GET['value'];
         $upper = strtoupper($value);

         if($upper == 'MALE' or $upper == 'FEMALE' or $upper == 'KIDS' or $upper == 'KID')
         {
           $query = "select * from Itemdetails where Gender like '%$value%' or Gender like '%Unisex%'";
         }

         elseif ($upper == 'UNISEX') 
         {
           $query = "select * from Itemdetails where Gender like '%$value%'";
         }

         else 
         {
           $query = "select * from Itemdetails where Name like '%$value%' or Description like '%$value%' or Material like '%$value%' or Size like '%$value%' or Category like '%$value%' or Price like '%$value%'";
         }
    }

    elseif(isset($_GET['redirect']) && $_GET['redirect'] == 'category')
    {
        $value = $_GET['value'];
        $query = "select * from Itemdetails where Category like '$value'";
    }

    elseif(isset($_GET['redirect']) && $_GET['redirect'] == 'gender')
    {
        $value = $_GET['value'];
        $query = "select * from Itemdetails where Gender like '$value' or Gender like 'Unisex'";
    }

   else 
   {
     $query = "select * from Itemdetails"; 
   }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item-Categories</title>
    <link rel="stylesheet" href="../Bootstrap/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/navbar.css">
    <link rel="stylesheet" href="../Css/category_page.css">
    <link rel="stylesheet" href="../Css/user_category.css">
    <link rel="stylesheet" href="../Css/footer.css">
  </head>
  <body>
     <?php require('../Utilities/_navbar.php');?>
     <!-- body  -->
     <div class="body">
        <div class="bodycontent">
          <!-- Print items -->
          <?php
             $query = mysqli_query($user,$query);
             if(mysqli_num_rows($query) == 0)
             {
                header("location: index.php");    
                exit();    
             }

             else 
             {
              while($associate = mysqli_fetch_assoc($query))
              {
                  $video = json_decode($associate['Image']);
                  $video = $video[0];
                  $extension = pathinfo($video,PATHINFO_EXTENSION);
                  $Price = $associate['Price'];
                  $Name = $associate['Name'];
                  $Sno = $associate['Sno'];

                  echo "<div class='card' style='width: 18rem;'>";
                        if($extension == 'mp4')
                        { 
                          echo"<video class='card-img-top' loop src='$video' type='video/mp4'>
                            </video>";
                        }

                        else 
                        {
                          echo"<img class='card-img-top'src='$video'>";  
                        }
                    echo"<div class='card-body'>
                            <input type='hidden' name='Sno' value='$Sno'> 
                            <h5 class='card-title'>&#8377;$Price/-</h5>
                            <p class='card-text'>$Name</p>
                            <a class='btn btn-primary'>Explore Now</a>
                          </div>
                        </div>";
              }
            }
          ?>
        </div>
     </div>
     <?php require('../Utilities/_footer.php');?> 
  </body>
<script src="../Bootstrap/Js/bootstrap.bundle.min.js"></script>
<script src="../Javascript/user_category.js"></script>
<script>
    <?php require('../Javascript/navbaruserconf.php');?>
</script>
</html>