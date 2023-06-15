<?php
  echo "document.getElementById('navlogout').addEventListener('click',func);
  document.getElementById('navsearchsubmit').addEventListener('click',funcsubmit);
  document.getElementById('carta').addEventListener('click',funccart);
  let username = document.getElementById('navusername');";
       if(!empty($_SESSION['User']))
       {
           echo 'username.innerHTML ="';
           echo '<h4>'.$_SESSION['User'].'</h4>';
           echo '";';
       }

       elseif (isset($_GET['login'])) 
       {
           echo 'username.innerHTML ="';
           echo '<h4>User</h4>';
           echo '";';
       }

       else 
       {
           echo 'username.innerHTML ="';
           echo "<h4><a href='../Utilities/login page.php?access=user'>Login</a></h4>";  
           echo '";';
           echo "document.getElementById('navorderhis').style = 'display:none';";
           echo "document.getElementById('navlogout').style = 'display:none';";
       }
 echo "
  let logo = document.getElementsByClassName('logoaddress');
  Array.from(logo).forEach(element => {
      element.addEventListener('click',funclogoaddress);
  });

  function func()
  {
    window.location = 'index.php?logout=true';
  }

  function funcsubmit()
  {
    let search = document.getElementById('navsearch').value;
    window.location = `category page.php?redirect=search&value=$"; echo "{search}`;
  }

  function funclogoaddress()
  {
     window.location = `index.php`;
  }

  function funccart()
  {
    window.location = `cart page.php`;
  }";
?>
