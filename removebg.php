<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RemoveBG</title>
    <link rel="stylesheet" href="removebg.css" />
  </head>
  <body>
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
              <li><a href="designer.php">Designer</a></li>
              <li><a  class="active" href="Tools.php">Tools</a></li>
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
                          <p>Logout</p>
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
  <!-- header Ends -->

    <div class="removebg">
      <div class="heading">
        <i class="fa-solid fa-eraser"></i>
        <h1>Background Remover</h1>
  </div>
    <div class="container">
      <!-- Add Card -->
      <div class="card" id="addCard">
        <button>
          <input type="file" name="" id="fileInput" />
          Upload Image
        </button>
        <p>Choose an image to remove BG</p>
      </div>
      <!-- Display Card -->
      <div class="card" id="displayCard">
        <div class="image-cont">
          <img
            id="display-img"
            src=""
            alt=""
          />
        </div>
        <button id="startBtn">Start</button>
      </div>
      <!-- Loading Card -->
      <div class="card" id="loadingCard">
        <div class="loader"></div>
      </div>
      <!-- Download Card -->
      <div class="card" id="downloadCard">
        <div class="image-cont">
          <img
            class="image-before"
            src="https://i.ibb.co/FxwzdMH/andraw-Tate.png"
            alt=""
          />
          <img
            class="image-after"
            src="https://i.ibb.co/TvQbyj8/andraw-Tate-afterpng.png"
            alt=""
          />
        </div>
        <div style="display: flex; gap: 10px">
          <button id="uploadAnother">Upload Another</button>
          <button style="padding: 10px 40px">
            <a id="downloadHref" download="WebX-No-bg"> Download </a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="other-tools">
    <h2>Explore Our Free Tools</h2>
    <p>Make your pictures pop with features that are completely free</p>
<div class="card-list">
    <a href="#" class="card-item">
        <img src="Images/cp.jpg" alt="Card Image">
        <span onclick="location.href='color_Pallete.php'" class="tool-btn">Color Pallete Generator</span>
        <h4>It can be used to get colors for your designs.</h4>
    </a>
    <a href="#" class="card-item">
        <img src="Images/QR.jpg" alt="Card Image">
        <span onclick="location.href='QRcode.php'" class="tool-btn">QR Code Generator</span>
        <h4>It helps to convert link into QR Code to upload on designs.</h4>
    </a>
    <a href="#" class="card-item">
        <img src="Images/gg.jpg" alt="Card Image">
        <span onclick="location.href='Gradient.php'" class="tool-btn">Gradient Generator</span>
        <h4>It helps to generate gradients for your designs.</h4>
    </a>
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
            <a href="#" class="link">Gradient Pallete Generator</a>
            <a href="#" class="link">Background Remover</a>
        </div>
    </footer>
    <div class="footline"></div>
    <div class="copyright-text">
        <p>Copyright © 2023 WEBXDESIGNO. All Rights Reserved.</p>
    </div>
</div>
<!-- Footer Ends -->
    <script src="removebg.js"></script>
  </body>
</html>
