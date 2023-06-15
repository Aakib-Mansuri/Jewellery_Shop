<?php require('../Utilities/_ConnectDatabase.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="../Css/login_page.css">
    <link rel="stylesheet" href="../Css/sign-up_page.css">

    <!-- check access -->
    <?php
        if(!isset($_GET['access']) && !isset($_POST['access'])) 
        {
            header("location: index.php");;   
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

  <!-- Sign-up -->
  <div class="body">
    <div class="left">
       <img src="../Images/Login Page/Admin Login Left.jpg" alt="image">
    </div>
    <div class="middle">
        <div class="formheader">
           <h1>Sign up</h1>
        </div>
        <div class="formbody">
         <form action="Sign-up.php?access=<?php echo $access;?>" method="post" class="adminloginform">
            <div class="Identity input">
                <input type="text" name="Identity" id="Identity" placeholder="Mobile Number or Email id" required>
            </div>
            <div class="Name input">
                <input type="text" name="Name" id="Name" placeholder="Full Name" required>
            </div>
            <div class="address input">
                <input type="text" name="Add" id="Add" placeholder="Enter your address" required>
            </div>
            <div class="Username input">
                <input type="text" name="Username" id="Username" placeholder="Username" required>
                <?php
                  if(isset($_GET['WrongDetails']) and $_GET['Details'] == 'UserName')
                  { 
                    echo "<p style='color:red;' id='p'>*enter a valid username</p>"; 
                  }

                  elseif(isset($_GET['Notavailable']))
                  { 
                    echo "<p style='color:red;' id='p'>*username is not available</p>"; 
                  }

                  else
                  {
                    echo "<p id='p'>username must be 5-20 characters long and contain lower case, number or special symbol</p>"; 
                  }
                ?>
            </div>
            <div class="Password input">
                <input type="Password" name="Password" id="Password" placeholder="Password" required>
                <?php
                  if(isset($_GET['WrongDetails']) and $_GET['Details'] == 'Password')
                  { 
                    echo "<p id='p' style='color:red;'>*Enter a valid password</p>"; 
                  }

                  else
                  {
                    echo "<p id='p'>password must be 8-16 characters long and contain number, lower case, upper case and special symbol</p>"; 
                  }
                ?>
            </div>
            <div class="input">
                <input type="submit" id="submit" value="SIGN UP">
            </div> 
         </form>
        </div>
        <div class="formfooter">
           <p>Have an account?</p>
            <h4><a href='../Utilities/login page.php?access=<?php echo $access;?>'>Log in</a></h4>
        </div>
    </div>
    <div class="right">
       <img src="../Images/Login Page/Admin Login Right.jpg" alt="image">
    </div> 
  </div>
</body>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
     $flag = False;
     $Identity = $_POST['Identity'];
     $Name = $_POST['Name'];
     $Username = $_POST['Username'];
     $Password = $_POST['Password'];
     $Address = $_POST['Add'];

     $query = "select * from Userdetails";
     $rows = mysqli_query($user,$query);
     while($associate=mysqli_fetch_assoc($rows))
     {
        if($associate['Username'] == $Username)
        {
            $flag = True; 
        }
     }

     if($flag) 
     {
        header("location: Sign-up.php?Notavailable=true&access=$access");
     }
     
     else 
     {
        if(preg_match('/[a-z]+[0-9_.]/', $Username) and strlen($Username) > 5)
        {
           if(preg_match('/[A-Za-z]+[0-9^\w]/', $Password) and strlen($Password) > 8)
           {
               $query = "insert into Userdetails values ('$Identity','$Name','$Address','$Username','$Password')";
               if(mysqli_query($user,$query))
               {
                   header("location: /Jewellery%20Shop/Utilities/login page.php?access=$access");
               }

               else 
               {
                   header("location: Sign-up.php?access=$access");
                   echo"<script> alert('Technical error');</script>";    
               }
           }
   
           else 
           {
               header("location: Sign-up.php?WrongDetails=true&Details=Password&access=$access");    
           }
        }
   
        else 
        {
            header("location: Sign-up.php?WrongDetails=true&Details=UserName&access=$access");    
        }    
     }
 }
?>
</html>