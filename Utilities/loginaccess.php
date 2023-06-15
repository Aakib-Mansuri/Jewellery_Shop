<?php
  session_start();
  if(!isset($_SESSION['User']))
  {
    echo"<script>
    let confirmation = confirm('You are not loged in. Do you want to login again','Yes');
        if(confirmation)
        {
            window.location = `/Jewellery%20Shop/Admin/index.php`;    
            exit();    
        }

        else
        {
            window.location= `/Jewellery%20Shop/Admin/home page.php?login=once`;    
            exit();
        }
    </script>";
  }
?>