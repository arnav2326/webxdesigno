<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="logo.css">
<title>Logo's</title>
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
            <li><a  class="active" href="templates.php" >Templates</a></li>
            <li><a href="designer.php">Designer</a></li>
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

<div class="other-tools">
            <h1>Logo's</h1>
        <div class="card-list">
        <div href="#" class="card-item">
                <img src="Images/logo1.jpg" alt="Card Image">
                <a href="Images/logo1.jpg" id="downloadimg" download="Logo">DOWNLOAD</a>
        </div>

            <div href="#" class="card-item">
                <img src="Images/logo2.jpg" alt="Card Image">
                <a href="Images/logo2.jpg" id="downloadimg" download="Logo">DOWNLOAD</a>
            </div>

            <div href="#" class="card-item">
            <img src="Images/logo3.jpg" alt="Card Image">
            <a href="Images/logo3.jpg" id="downloadimg" download="Logo">DOWNLOAD</a>
        </div>

            <div href="#" class="card-item">
            <img src="Images/logo4.jpg" alt="Card Image">
            <a href="Images/logo4.jpg" id="downloadimg" download="Logo">DOWNLOAD</a>
        </div>

            <div href="#" class="card-item">
            <img src="Images/logo5.jpg" alt="Card Image">
            <a href="Images/logo5.jpg" id="downloadimg" download="Logo">DOWNLOAD</a>
        </div>

        <div href="#" class="card-item">
            <img src="Images/logo6.jpg" alt="Card Image">
            <a href="Images/logo6.jpg" id="downloadimg" download="Logo">DOWNLOAD</a>
        </div>

            <div href="#" class="card-item">    
            <img src="Images/logo7.jpg" alt="Card Image">
            <a href="Images/logo7.jpg" id="downloadimg" download="Logo">DOWNLOAD</a>
        </div>

        <div href="#" class="card-item">
            <img src="Images/logo8.jpg" alt="Card Image">
            <a href="Images/logo8.jpg"  id="downloadimg" download="Logo">DOWNLOAD</a>
        </div>
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
</body>
</html>