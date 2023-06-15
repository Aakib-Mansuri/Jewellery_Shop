<?php
    session_start();
    if(!isset($_SESSION['User']))
    {
        echo"<script>
        let confirmation = confirm('You are not loged in. Do you want to login again','Yes');
            if(confirmation)
            {
                window.location = `/Jewellery%20Shop/Utilities/login page.php?access=user`;    
                exit();    
            }

            else
            {
                window.location= `index.php`;    
                exit();
            }
        </script>";
    }
    
else 
{
  require('../Utilities/_ConnectDatabase.php');
  $Sno = $_GET['Sno'];
  $Size = $_POST['Size'];
  $Qty = $_POST['quantity'];
  $Username = $_SESSION['User'];

  $query = "select * from Itemdetails where Sno = $Sno";
  $query = mysqli_query($user,$query);
  $associate = mysqli_fetch_assoc($query);

  $Pid = $associate['Sno'];
  $Pname = $associate['Name'];
  $Price = $associate['Price'];

    $i=1;
    while(1)
    {
        $query = mysqli_query($user,"select Sno from Cartdetails where Sno = $i");
        $rows = mysqli_num_rows($query);
        if($rows == 0)
        {
           $Sno = $i;
           break;
        } 
        $i++;
    }
  $query = "insert into cartdetails values ('$Sno','$Username','$Pid','$Pname','$Size','$Price','$Qty')";

 if(mysqli_query($user,$query))
 {
    $Sno = $associate['Sno'];
    echo"<script>
            window.location = `item page.php?Sno=$Sno`;    
            alert('Prodect added successfuly');
            exit();    
        </script>";
 }

 else
 {
    $Sno = $associate['Sno'];
    echo"<script>
            window.location = `item page.php?Sno=$Sno`;    
            alert('Technical error try after some time...!');
            exit();    
        </script>";
}
}
?>