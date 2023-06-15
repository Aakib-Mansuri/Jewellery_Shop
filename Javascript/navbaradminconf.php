<?php
 echo "
   document.getElementById('navlogout').addEventListener('click',func);
   document.getElementById('navsearchsubmit').addEventListener('click',funcsubmit);
   document.getElementById('navorderhis').style = 'display:none';

   let username = document.getElementById('navusername');
   username.innerHTML = '";if(!empty($_SESSION['User']))
                           {
                               echo '<h4>'.$_SESSION['User'].'</h4>';
                           }

                           else 
                           {
                              echo '<h4>User</h4>';  
                           }
                           echo"';

   let logo = document.getElementsByClassName('logoaddress');
   Array.from(logo).forEach(element => {
       element.addEventListener('click',funclogoaddress);
   });

   function func()
   {
     window.location = '/Jewellery%20Shop/Admin/home page.php?logout=true';
   }

   function funcsubmit()
   {
     let search = document.getElementById('navsearch').value;
     window.location = `/Jewellery%20Shop/Admin/category page.php?redirect=search&value=";echo"$"."{search}`;
   }

   function funclogoaddress()
   {";
       if(empty($_SESSION['User']))
        {
           echo 'window.location = `/Jewellery%20Shop/Admin/home page.php?login=once`;';
        }

        else 
        {
           echo 'window.location = `/Jewellery%20Shop/Admin/home page.php`;';  
        }
   echo "}";
?>