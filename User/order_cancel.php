<?php
    require('../Utilities/_ConnectDatabase.php');
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
    $Username = $_SESSION['User'];
    function funcdelete($Username,$reason)
    {
        require('../Utilities/_ConnectDatabase.php');
        $query = "delete from Cartdetails where USername like '$Username'";
        mysqli_query($user,$query);
        if($reason == 'order')
        {
        header("location: cart page.php");
        echo"<script>alert('Your order confirm successfuly.');</script>";    
        }

        else
        {
        header("location: cart page.php");
        echo"<script>alert('Cart removed sucessfuly..!');</script>";    
        }
    }
 
  if(isset($_GET['order']))
  {
    $i=1;
    while(1)
    {
        $query = mysqli_query($user,"select Orderid from Orderdetails where Orderid = $i");
        $rows = mysqli_num_rows($query);
        if($rows == 0)
        {
           $Orderid = $i;
           break;
        } 
        $i++;
    }
    $query = mysqli_query($user,"select * from Cartdetails where Username like '$Username'");
    
    while($associate = mysqli_fetch_assoc($query))
    {
        $Pid = $associate['Pid'];
        $Pname = $associate['Pname'];
        $Size = $associate['Size'];
        $Price = $associate['Price'];
        $Qty = $associate['Qty'];

        $secondquery = "insert into Orderdetails values ('$Orderid','$Username','$Pid','$Pname','$Size','$Price','$Qty')";
        mysqli_query($user,$secondquery);
    } 
    
      funcdelete($Username,'order');
  }

  else 
  {
    funcdelete($Username,'delete');    
  }
}
?>