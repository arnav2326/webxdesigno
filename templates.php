<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="templates.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<title>Templates</title>
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
            <li><a  class="active" href="templates.php">Templates</a></li>
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
    <div class="main-heading">
    <i class="fa-regular fa-image"></i>
        <h2>Templates</h2>
        </div>
        <div class="card-list">
        <a href="#" class="card-item">
                <img src="Images/certificate.jpg" alt="Card Image">
                <p>Certificates</p>
                <span onclick="location.href='certificate.php'" class="tool-btn">View More</span>
            </a>
            <a href="#" class="card-item">
                <img src="Images/brochure.jpg" alt="Card Image">
                <p>Brochures</p>
                <span onclick="location.href='brochure.php'" class="tool-btn">View More</span>
            </a>
            <a href="#" class="card-item">
                <img src="Images/cv.jpg" alt="Card Image">
                <p>Resume</p>
                <span onclick="location.href='cv.php'" class="tool-btn">View More</span>
            </a>
            <a href="#" class="card-item">
            <img src="Images/flyer.jpg" alt="Card Image">
            <p>Flyers</p>
            <span onclick="location.href='flyer.php'" class="tool-btn">View More</span>
        </a>
            <a href="#" class="card-item">
            <img src="Images/gift.jpg" alt="Card Image">
            <p>Gift Cards</p>
            <span onclick="location.href='giftcard.php'" class="tool-btn">View More</span>
        </a>
            <a href="#" class="card-item">
            <img src="Images/icons.jpg" alt="Card Image">
            <p>Icons</p>
            <span onclick="location.href='icons.php'" class="tool-btn">View More</span>
        </a>
        <a href="#" class="card-item">
            <img src="Images/invitation.jpg" alt="Card Image">
            <p>Invitations</p>
            <span onclick="location.href='invitation.php'" class="tool-btn">View More</span>
        </a>
            <a href="#" class="card-item">
            <img src="Images/letterhead.jpg" alt="Card Image">
            <p>Letterheads</p>
            <span onclick="location.href='letterhead.php'" class="tool-btn">View More</span>
        </a>
        <a href="#" class="card-item">
            <img src="Images/logo.jpg" alt="Card Image">
            <p>Logo's</p>
            <span onclick="location.href='logo.php'" class="tool-btn">View More</span>
        </a>
        <a href="#" class="card-item">
            <img src="Images/post.jpg" alt="Card Image">
            <p>Posts</p>
            <span onclick="location.href='instaposts.php'" class="tool-btn">View More</span>
        </a>
        <a href="#" class="card-item">
        <img src="Images/postcard.jpg" alt="Card Image">
        <p>Postcards</p>
        <span onclick="location.href='postcard.php'" class="tool-btn">View More</span>
    </a>
        <a href="#" class="card-item">
        <img src="Images/poster.jpg" alt="Card Image">
        <p>Posters</p>
        <span onclick="location.href='poster.php'" class="tool-btn">View More</span>
    </a>
        <a href="#" class="card-item">
        <img src="Images/vc.jpg" alt="Card Image">
        <p>Visiting Cards</p>
        <span onclick="location.href='vc.php'" class="tool-btn">View More</span>
    </a>
        <a href="#" class="card-item">
        <img src="Images/web.jpg" alt="Card Image">
        <p>Websites</p>
        <span onclick="location.href='web.php'" class="tool-btn">View More</span>
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
</body>
</html>