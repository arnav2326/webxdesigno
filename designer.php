<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designers</title>
    <link rel="stylesheet" href="designer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>

  <body>
            <!-- Navbar Starts -->
            <header>
              <div class="logo">
              <span></a><img src="logo.png"  alt="Logo"></span>
          
              <div class="headname">
                  <a href="home.php"><h4>WEBXDESIGNO</h4></a>
              </div>
          </div>
              <input type="checkbox" id="nav_check" hidden>
              <nav>
                  <ul>
                      <li><a href="home.php" >Home</a></li>
                      <li><a href="templates.php">Templates</a></li>
                      <li><a  class="active" href="designer.php">Designer</a></li>
                      <li><a href="Tools.php">Tools</a></li>
                      <li><a href="todo.php">To-Do's</a></li>
                  </ul>
              </nav>
              <img src="images/user.png" class="user-pic" onclick="toggleMenu()">
                      
                      <div class="sub-menu-wrap" id="subMenu">
                          <div class="sub-menu">
                              <div class="user-info">
                                  <img src="images/user.png">
                                  <h3>Arnav Bharadi</h3>
                              </div>
                              <hr>
                              <div class="sub-menu-link">
                                  <img src="images/profile.png">
                                  <p>Edit Profile</p>
                                  <span>></span>
                              </div>
                              <div class="sub-menu-link">
                                  <img src="images/setting.png">
                                  <p>Settings</p>
                                  <span>></span>
                              </div>
                              <div class="sub-menu-link">
                                  <img src="images/help.png">
                                  <p>Help & Support</p>
                                  <span>></span>
                              </div>
                              <div class="sub-menu-link">
                                  <img src="images/logout.png">
                                  <p><a  href="index.php?logout='1'" >Logout</a></p>
                                  <span>></span>
                              </div>
                          </div>
                      </div> 
                  
                  <script>
                      let subMenu = document.getElementById("subMenu");
              
                      function toggleMenu(){
                          subMenu.classList.toggle("open-menu");
                      }
                  </script>
              
              
              <label for="nav_check" class="hamburger">
                  <div></div>
                  <div></div>
                  <div></div>
              </label>
              
          </header>
          <!-- Navbar Ends -->
      <!-- Main Content Starts here  -->
      <div class="main_des">
        <div class="main_heading">
        <i class="fa-solid fa-user-group"></i>
        <h1>Designers</h1>
      </div>
    <div class="container">
      <div class="box">
      <div class="image">
          <img src="Images/shagy.jpeg">
        </div>
        <div class="name_job">Sagar Sonar</div>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Graphic Designer having four years of experience and having a intermediate skills in Photoshop & Illustrator.</p>
        <div class="btns">
          <button>PortFolio</button>
          <button>Hire</button>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="Images/Arnav.jpg" alt="">
        </div>
        <div class="name_job">Arnav Bharadi</div>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Graphic & Web Designer with experience of over 5 years and having intermediate knowledge of Graphic & Web.</p>
        <div class="btns">
          <button>PortFolio</button>
          <button>Hire</button>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="Images/sanit.jpg" alt="">
        </div>
        <div class="name_job">Sanit Mahanwar</div>
          <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Skilled & Proffesional Web Developer having mastery in HTML, CSS, Javascript and all web programming languages.</p>
        <div class="btns">
          <button>PortFolio</button>
          <button>Hire</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Main Content Ends here -->

    <div class="desprog">
      <div class="des-content">
      <h3>Want to be a Designer? </h3>
      <button>Register</button>
    </div>
    </div>

                    <!-- Footer Starts -->
                    <div class="footer-session">
                      <footer class="footer">
                          <div class="group">
                              <h2 class="title">WEBXDESIGNO</h2>
                              <p class="intro">We are an another Home for our beloved Graphic Designers where they get all the useful Tools and Templates and can even apply as a Designer for work.</p>
                              <div class="follow-button">
                                  <a href="#"><img src="images/instagram.png" alt="instagram"></a>
                                  <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                                  <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                                  <a href="#"><img src="images/youtube.png" alt="Youtube"></a>
                              </div>
                          </div>
              
                          <div class="group">
                              <h3 class="title">Services</h3>
                              <a href="#" class="link">Logos</a>
                              <a href="#" class="link">Posts</a>
                              <a href="#" class="link">Flyers</a>
                              <a href="#" class="link">Brochures</a>
                          </div>
              
                          <div class="group">
                              <h3 class="title">Print Media</h3>
                              <a href="#" class="link">Letterhead</a>
                              <a href="#" class="link">Posters</a>
                              <a href="#" class="link">Visiting Card</a>
                              <a href="#" class="link">Gift Card</a>
                          </div>
              
                          <div class="group">
                              <h3 class="title">Tools</h3>
                              <a href="#" class="link">Image Enhancer</a>
                              <a href="colorpallete.php" class="link">Color Pallete Generator</a>
                              <a href="Gradient.php" class="link">Gradient Pallete Generator</a>
                              <a href="removebg.php" class="link">Background Remover</a>
                          </div>
                      </footer>
                      <div class="footline"></div>
                      <div class="copyright-text">
                          <p>Copyright © 2023 WEBXDESIGNO. All Rights Reserved.</p>
                      </div>
                  </div>
                  <!-- Footer Ends -->
      </body>
</html>
