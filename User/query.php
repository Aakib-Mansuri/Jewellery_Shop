<?php
  require('../Utilities/_ConnectDatabase.php');
  $Name = $_GET['Name'];
  $Email = $_GET['Email'];
  $Query = $_GET['query'];

  $i=1;
  while(1)
  {
    $query = mysqli_query($user,"select Sno from querydetails where Sno like '$i'");
    $rows = mysqli_num_rows($query);
    if($rows == 0)
    {
       $Sno = $i;
       break;
    } 
    $i++;
  }

  $query = "insert into querydetails values ('$Sno','$Name','$Email','$Query')";
  
  
  if(mysqli_query($user,$query))
  {
      echo"<script>
                window.location = `index.php`;    
                alert('Your query has been submited succesfuly. we will reply you soon!!');
                exit();    
          </script>";
  }

  else 
  {
    echo"<script> 
           window.location = `index.php`;
           alert('There was an error to submit your query. please retry after some time.');
        </script>";
  
  }
?>