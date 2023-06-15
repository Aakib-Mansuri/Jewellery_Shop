<?php
  require('../Utilities/_ConnectDatabase.php');
  session_start();
  if(isset($_GET['logout']))
  {
    session_unset();
    header("location: index.php");    
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanishq-online Gold Diamond Jewellery Shoping Store India</title>
    <link rel="stylesheet" href="../Bootstrap/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/navbar.css">
    <link rel="stylesheet" href="../Css/user_index.css">
    <link rel="stylesheet" href="../Css/footer.css">
    
</head>
<body >
<?php require('../Utilities/_navbar.php');?>
  <!-- body -->
  <body>
     <div class="bodycontent">
        <!-- slider -->
        <div class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="category page.php"><img src="../Images/User Index Page/Slider 1.jpg" class="d-block w-100" alt="image"></a>
                </div>
                <div class="carousel-item">
                <a href="category page.php?redirect=search&value=Diamond"><img src="../Images/User Index Page/Slider 2.jpg" class="d-block w-100" alt="image"></a>
                </div>
                <div class="carousel-item">
                <a href="category page.php?redirect=search&value=Silver"><img src="../Images/User Index Page/Slider 3.jpg" class="d-block w-100" alt="image"></a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        
        <!-- body -->
        <div class="container">
            <!-- heading 1 -->
            <h2 class="text-center heading3 bold">Shop By Category</h2>
            <p class="text-center small">Browse through your favourite categories. We've got them all!</p><hr>

            <!-- cards -->
            <div class="category">
               <div id="card1"> 
                <div class="card" style="width: 12rem;">
                    <img src="../Images/User Index Page/Category Gold Coin.jpg" class="card-img-top">
                 <a href="category page.php?redirect=category&value=Gold Coins">
                 <div class="card-body">
                    <h5 class="card-title">Gold Coins</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
               <div id="car2">
                <div class="card" style="width: 12rem;">
                    <img src="../Images/User Index Page/Category Earrings.jpg" class="card-img-top">
                 <a href="category page.php?redirect=category&value=Earrings">
                 <div class="card-body">
                    <h5 class="card-title">Earrings</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"><p>
                 </div></a>
                </div>
               </div>
               <div id="car3">
                <div class="card" style="width: 12rem;">
                    <img src="../Images/User Index Page/Category Pendant.jpg" class="card-img-top">
                 <a href="category page.php?redirect=category&value=Pendants">
                 <div class="card-body">
                    <h5 class="card-title">Pendants</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
               <div id="car4">
                <div class="card" style="width: 12rem;">
                    <img src="../Images/User Index Page/Category Ring.jpg" class="card-img-top">
                 <a href="category page.php?redirect=category&value=Rings">
                 <div class="card-body">
                    <h5 class="card-title">Finger Rings</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
               <div id="car5">
                <div class="card" style="width: 12rem;">
                    <img src="../Images/User Index Page/Category Neckwear.jpg" class="card-img-top">
                 <a href="category page.php?redirect=category&value=Neckwear">
                 <div class="card-body">
                    <h5 class="card-title">Neckwear</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
               <div id="car6">
                <div class="card" style="width: 12rem;">
                    <img src="../Images/User Index Page/Category Chain.jpg" class="card-img-top">
                 <a href="category page.php?redirect=category&value=Chains">
                 <div class="card-body">
                    <h5 class="card-title">Chains</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
               <div id="car7">
                <div class="card" style="width: 12rem;">
                    <img src="../Images/User Index Page/Category Bangle.jpg" class="card-img-top">
                 <a href="category page.php?redirect=category&value=Bangles">
                 <div class="card-body">
                    <h5 class="card-title">Bangles</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
               <div id="car8">
                <div class="card" style="width: 12rem;">
                    <img src="../Images/User Index Page/Category Bracelet.jpg" class="card-img-top">
                 <a href="category page.php?redirect=category&value=Bracelets">
                 <div class="card-body">
                    <h5 class="card-title">Bracelets</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
            </div>

            <!-- video slider -->
            <div class="video_slider">
                <video src="../Images/User Index Page/Video Slider.mp4" type="video/mp4" loop="" autoplay="" muted="" playsinline=""></video>
            </div>

            <!-- heading 2 -->
            <h2 class="text-center heading3 bold">Shop by Gender</h2>
            <p class="text-center small">Explore our latest designs curated just for you!</p><hr>

            <!-- cards -->
            <div class="category">
               <div id="gen1"> 
                <div class="card" style="width: 20rem;">
                    <img src="../Images/User Index Page/Category Women.jpg" class="card-img-top">
                 <a href="category page.php?redirect=gender&value=Female">
                 <div class="card-body">
                    <h5 class="card-title">Women</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
               <div id="gen2"> 
                <div class="card" style="width: 20rem;">
                    <img src="../Images/User Index Page/Category Men.jpg" class="card-img-top">
                 <a href="category page.php?redirect=gender&value=Male">
                 <div class="card-body">
                    <h5 class="card-title">Men</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
               <div id="gen3"> 
                <div class="card" style="width: 20rem;">
                    <img src="../Images/User Index Page/Category Kids.jpg" class="card-img-top">
                 <a href="category page.php?redirect=gender&value=Kids">
                 <div class="card-body">
                    <h5 class="card-title">Kids</h5>
                    <p>Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></p>
                 </div></a>
                </div>
               </div>
              
            </div>

            <!-- Jewellery Guides -->
            <div class="guides">
                <div id="guide1">
                    <h3>Find Your Ring Size</h3>
                    <a href="category page.php?redirect=category&value=Rings">Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></a>
                </div>
                <div id="guide2">
                    <h3>The Jewellery Care Guide</h3>
                    <a href="category page.php?redirect=category&value=Earrings">Explore <img src="../Images/User Index Page/Explore Right.png" id="ExRight"></a>
                </div>
            </div>

            <!-- heading s3 -->
            <h2 class="text-center heading3 bold">Connect With Us</h2>
            <p class="text-center small">We are always available to guide you at your convenience</p><hr>

            <!-- Query section -->
            <div class="query">
             <form action="query.php">
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter your e-mail address">
                </div>
                <div class="mb-3">
                    <label for="query" class="form-label">Queries</label>
                    <textarea class="form-control" id="query" name="query" rows="6" placeholder="Enter your queries"></textarea>
                </div>
                <input type="submit" id="submit" class="btn">
                <input type="reset" id="reset" class="btn">
             </form>
            </div>
        </div>
     </div>
  </body>  
<?php require('../Utilities/_footer.php');?>
</body>
<script src="../Bootstrap/Js/bootstrap.min.js"></script>
<script>
    <?php require('../Javascript/navbaruserconf.php');?>
</script>
</html>