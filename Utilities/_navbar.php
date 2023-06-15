<?php
  echo 
  "<!-- navigation bar -->
  <nav>
      <!-- logo -->
      <div class='navcontainer'>
          <div id='navleft'>
              <a class='logoaddress' >
                  <img src='../Images/Navbar/Nav Main Logo.jpg' alt='image' width='80px'>
              </a>
          </div>

          <!-- search bar -->
          <div id='navmiddle'>
              <div class='search'>
                  <div id='navsearchform'>
                      <input type='text' id='navsearch' placeholder='Search for Gold Jewellery, Diamond Jewellery and more...'>
                      <button type='submit' id='navsearchsubmit'><img src='../Images/Navbar/Nav Search Logo.png' alt='Search' height='25px'></button>
                  </div>
              </div>
          </div>

          <!-- other details -->
          <div id='navright'>
              <div id='home'>
                  <a class='logoaddress'>
                      <img src='../Images/Navbar/Nav Home Logo.png' alt='image' height='25px' style='display: block;margin-left: 5px;'>
                      <p id='navp'>HOME</p>
                  </a>
              </div>                

              <div id='account'>
                  <a href='#'>
                   <img src='../Images/Navbar/Nav Account Logo.jpg' alt='image' height='25px' style='display: block; margin-left: 20px;'>
                   <p id='navp'>ACCOUNT</p>
                   <div id='list'>
                      <ul>
                          <li id='navusername'></li>
                          <li id='navorderhis'></li>
                          <li id='navlogout'>Log-out</li>
                      </ul>  
                    </div>
                  </a>
              </div>
              
              <div id='cart'>
                  <a id='carta'>
                   <img src='../Images/Navbar/Nav Cart Logo.jpg' alt='image' height='25px' style='display: block;margin-left: 6px;'>
                   <p id='navp'>CART</p>
                  </a>
              </div>
          </div>
      </div>
  </nav>
  ";
?>