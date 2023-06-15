<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-page</title>
    <link rel="stylesheet" href="../Css/login_page.css">
    <?php require('_ConnectDatabase.php');?>

    <!-- check access -->
    <?php
        if(!isset($_GET['access']) && !isset($_POST['access'])) 
        {
            header("location: /Jewellery%20Shop/User/index.php");;   
        }

        else 
        {
           if(isset($_GET['access']))
           {
              $access = $_GET['access'];
           }

           else
           {
              $access = $_POST['access'];
           }    
        }
    ?>
</head>
<body>
  <!-- Logo   -->
  <div class="logo">
       <a href="../User/index.php">
           <img src="../Images/Navbar/Nav Main Logo.jpg" alt="image">
      </a>
  </div>

  <!-- Login -->
  <div class="body">
    <div class="left">
       <img src="../Images/Login Page/Admin Login Left.jpg" alt="image">
    </div>
    <div class="middle">
        <div class="formheader">
           <h1>Login</h1>
        </div>
        <div class="formbody">
         <form action="login page.php" method="post" class="adminloginform">
            <input type="hidden" name="access" value="<?php echo $access;?>">
            <div class="Username">
                <label for="Username">Username</label><br>
                <input type="text" name="Identity" id="Username" placeholder="Phone number, username, email id" required <?php if(isset($_GET['Username'])){echo "value ='".$_GET['Username']."'";};?>>
            </div>
            <div class="Password">
                <label for="Password">Password </label><br>
                <input type="Password" name="Password" id="Password" placeholder="Enter your password" required>
            </div>
            <p id="error">*enter a valid 
                <?php 
                if(isset($_GET['WrongDetails']))
                {
                    echo $_GET['WrongDetails'];    
                    echo "<script>
                            document.getElementById('error').style ='visibility:visible;';
                         </script>";
                }?></p>
            <div class='remember'>
                <input type='checkbox' name='Remember' id='Remember' value="true">
                <label for='Remember'>Remember Me</label>
            </div>
            <div>
                <input type='submit' id='submit' value='LOG IN'>
            </div>
         </form>
        </div>
        <div class="formfooter">
            <?php
                if($access == 'admin')
                {
                    echo "<h4><a href='../Admin/forgot pass.php?access=$access'>Forgot Password ?</a></h4>";
                }

                else
                {
                    echo "<p>Or Sing Up Using</p>
                          <h4><a href='../User/Sign-up.php?access=$access'>SIGN UP</a></h4>";

                }
            ?>
        </div>
    </div>
    <div class="right">
       <img src="../Images/Login Page/Admin Login Right.jpg" alt="image">
    </div> 
  </div>
</body>
<?php
 //form submition
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $Identity = $_POST['Identity'];
    $Password = $_POST['Password'];
    $Remember = '';

    if(isset($_POST['Remember']))
    {
        $Remember = $_POST['Remember'];
    }

    if($access == 'admin')
    {
        $table = 'AdminDetails';
    }

    else
    {
        $table = 'Userdetails';
    }
    
    $query = "select * from $table where Identity like '$Identity' and Password like '$Password' or Username like '$Identity' and Password like '$Password'";
    $query = mysqli_query($user,$query);
    $rows = mysqli_num_rows($query);
 
    //valid login details
    if($rows == 1)
     {
        session_start();
        $_SESSION['User'] = $Identity;
            
        if(!empty($Remember))
        {
            
            if($access == 'admin')
            {
               header("location: /Jewellery%20Shop/Admin/home%20page.php?user=$Identity");
            }

            else 
            {
                header("location: /Jewellery%20Shop/User/index.php?user=$Identity");
            }
        }
        else 
        {
            if($access == 'admin')
            {
                header("location: /Jewellery%20Shop/Admin/home%20page.php?login=once");
            }

            else 
            {
                header("location: /Jewellery%20Shop/User/index.php?login=once");
            }
        }
     }
     
    //invalid login details 
    else 
    {
        $query = "select Identity, Username from $table";
        $rows = mysqli_query($user,$query);
        while($associate = mysqli_fetch_assoc($rows))
        {
           if($associate['Identity'] == $Identity || $associate['Username'] == $Identity)
           {
              header("location: /Jewellery%20Shop/Utilities/login%20page.php?access=$access&WrongDetails=password&Username=$Identity");    
              exit();
           }            
        }

        header("location: /Jewellery%20Shop/Utilities/login%20page.php?access=$access&WrongDetails=details"); 
    }
 }
?>
</html>