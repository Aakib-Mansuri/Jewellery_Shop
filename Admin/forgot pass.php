<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-page</title>
    <link rel="stylesheet" href="../Css/forgot_pass.css">
    <?php require('../Utilities/_ConnectDatabase.php');?>

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

  <!-- Reset password -->
  <div class="body">
    <div class="left">
       <img src="../Images/Login Page/Admin Login Left.jpg" alt="image">
    </div>
    <div class="middle">
        <div class="formheader">
           <h1>Reset Password</h1>
        </div>
        <div class="formbody">
         <form action="forgot pass.php" method="post" class="adminloginform">
            <input type="hidden" name="access" value="<?php echo $access;?>">
            <?php
              if(!isset($_GET['Identity']))
              {
                 echo "<div class='Username'>
                         <label for='Username'>Username</label><br>
                         <input type='text' name='Identity' id='Username' placeholder='Phone number, username, email id' required>
                       </div>";
              }

              else 
              {
                $Identity = $_GET['Identity'];
                echo "<input type='hidden' name='Identity' value='$Identity'>
                      <div class='Password'>
                            <label for='Password'>Password </label><br>
                            <input type='text' name='Password' id='Password' placeholder='Enter your password' required>
                      </div>
                      <div class='RePassword'>
                            <label for='RePassword'>Re-type Password </label><br>
                            <input type='Password' name='RePassword' id='RePassword' placeholder='Re-Enter your password' required>
                      </div>";  
              }
            ?>

            <p id="error">
                <?php 
                if(isset($_GET['WrongDetails']))
                {
                   echo "<script>
                           document.getElementById('error').style ='visibility:visible;';
                         </script>";
                    if($_GET['WrongDetails'] == 'username')
                    {
                        echo "*enter a valid username";
                    }

                    else 
                    {
                        echo "*Password doesn't matched";
                    }
                }?>
            </p>
            <div>
                <input type='submit' id='submit' value='Submit'>
            </div>
         </form>
        </div>
        <div class="formfooter">
          <p>Already a User ?</p>
          <h4><a href='../Utilities/login page.php?access=<?php echo $access;?>'>Login</a></h4>
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
    // verify Identity
    if(!isset($_POST['Password']))
    {
        $Identity = $_POST['Identity'];
        $query = "select * from AdminDetails where Identity like '$Identity' or Username like '$Identity'";
        $query = mysqli_query($user,$query);
        $rows = mysqli_num_rows($query);
 
        //valid username
        if($rows == 1)
        {
            header("location: /Jewellery%20Shop/Admin/forgot pass.php?access=$access&Identity=$Identity");
        }
        
        
        //invalid username 
        else 
        {
            header("location: /Jewellery%20Shop/Admin/forgot pass.php?access=$access&WrongDetails=username");    
        }
    }
    
    //change password
    else 
    {
        $Identity = $_POST['Identity'];
        $Password = $_POST['Password'];
        $RePassword = $_POST['RePassword'];

        //Password does not match
        if($Password != $RePassword)
        {
            header("location: /Jewellery%20Shop/Admin/forgot pass.php?access=$access&Identity=$Identity&WrongDetails=password");  
        }

        else 
        {
            $query = "update AdminDetails set Password = '$Password' where Identity like '$Identity' or Username like '$Identity'";
            if(mysqli_query($user,$query))
            {
                header("location: /Jewellery%20Shop/Utilities/login page.php?access=$access");
            }

            else 
            {
                header("location: /Jewellery%20Shop/Admin/forgot pass.php?access=$access&Identity=$Identity&WrongDetails=password");
            }
        }
    }
  }
?>
</html>