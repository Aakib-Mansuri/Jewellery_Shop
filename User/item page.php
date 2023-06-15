<?php
  session_start();
  require('../Utilities/_ConnectDatabase.php');
?>

<!-- Fetch Items -->
<?php
    $Sno = $_GET['Sno'];
    $query = "select * from Itemdetails where Sno = $Sno"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item-Page</title>
    <link rel="stylesheet" href="../Bootstrap/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/navbar.css">
    <link rel="stylesheet" href="../Css/item_page.css">
    <link rel="stylesheet" href="../Css/footer.css">
  </head>
  <body>
     <?php require('../Utilities/_navbar.php');?>
     <!-- body  -->
     <section class="container product my-5 pt-5">
          <?php
                $query = mysqli_query($user,$query);
                $associate = mysqli_fetch_assoc($query);

                $Name = $associate['Name'];
                $Description = $associate['Description'];
                $Size = json_decode($associate['Size']);
                $Price = $associate['Price'];
                $video = json_decode($associate['Image']);
                $big_img = $video[0];
                $extension = pathinfo($big_img,PATHINFO_EXTENSION);
                $small_img1 = '';
                $small_img2 = '';
                $small_img3 = '';
                if(!empty($video[1]))
                {
                 $small_img1 = $video[1];
                }

                if(!empty($video[2]))
                {
                 $small_img2 = $video[2];
                }
                if(!empty($video[3]))
                {
                 $small_img3 = $video[3];
                }
                $gender = $associate['Gender'];
                 
                echo "<div class='row mt-5'>
                <div class='col-lg-5 col-12 left'>
                    <div id='Mainimg'>";
                    if($extension == 'mp4')
                    {   
                      echo"
                      <video class='img-fluid pb-1 big-image' src='$big_img' loop='' autoplay='' muted></video>
                    
                      </div>
                      <div class='small-img-group'>
                         <div class='small-img-col'>
                         <video class='img-fluid pb-1 big-image' src='$big_img' width='100%'></video>
                      </div>";
                    }
                    else 
                    {
                        echo"
                      <img class='img-fluid pb-1 big-image' src='$big_img'>
                    
                      </div>
                      <div class='small-img-group'>
                         <div class='small-img-col'>
                         <img class='img-fluid pb-1 big-image' src='$big_img' width='100%'>
                      </div>";
                    }
                    echo"
                    <div class='small-img-col'>
                            <img src='$small_img1' width='100%' class='small-img'>
                        </div>
                        <div class='small-img-col'>
                            <img src='$small_img2' width='100%' class='small-img'>
                        </div>
                        <div class='small-img-col'>
                            <img src='$small_img3' width='100%' class='small-img'>
                        </div>
                    </div>
                </div>
                <div class='col-lg-6 col-12 right'>
                <form action='cartdetails.php?Sno="; echo $Sno; echo"' method='post'>
                    <h3 class='py-4'>$Name</h3>
                    <h2>&#8377;$Price/-</h2>
                    <select name='Size' class='my-3'>
                    <option>Select Size</option>";
                    foreach ($Size as $key => $value) 
                    {
                       echo "<option value='$value'>$value</option>";
                    }
                    echo"</select>
                    <input type='number' name='quantity' value='1' id='qty' required>
                    <input type='submit' class='buy-btn' value='Add To Cart' id='AddToCart'>
                    <h4 class='mt-5 mb-5'>Product Details</h4>
                    <p>$Description</p>
                    <p>Available for gender: $gender</p>
                </form>
                </div>
            </div>";
          ?>
     </section>
     
     </div>
     <?php require('../Utilities/_footer.php');?> 
  </body>
<script src="../Bootstrap/Js/bootstrap.bundle.min.js"></script>
<script>
    <?php require('../Javascript/navbaruserconf.php');?>
</script>
</html>