<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Tools.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Tools</title>
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
    <section class="hero-main">
        <div class="heading">
            <i class="fa-solid fa-paintbrush"></i>
            <h1>Tools</h1>
        </div>
    </section>
    
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2>Remove Background</h2>
                <p>Remove your image's background in one minute.</p>
                <button onclick="location.href='removebg.php'" class="btn" id="removebg">Use Now</button>
            </div>
            <div class="hero-image">
                <img src="Images/bgr.jpg" alt="about">
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <div class="hero-image">
                <img src="Images/cp.jpg" alt="about">
            </div>
            <div class="hero-content">
                <h2>Color Pallete Generator</h2>
                <p>Generate your own style of colors with single click.</p>
                <button onclick="location.href='color_Pallete.php'" class="btn">Use Now</button>
            </div>
        </div>
    </section>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2>Gradient Generator</h2>
                <p>Get a Gradient Color for your design easily.</p>
                <button onclick="location.href='Gradient.php'" class="btn">Use Now</button>
            </div>
            <div class="hero-image">
                <img src="Images/gg.jpg" alt="about">
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <div class="hero-image">
                <img src="Images/QR.jpg" alt="about">
            </div>
            <div class="hero-content">
                <h2>QR Code Generator</h2>
                <p>Generate a QR Code for your Design.</p>
                <button onclick="location.href='QRcode.php'" class="btn">Use Now</button>
            </div>
        </div>
    </section>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2>Image Enhancer</h2>
                <p>Quickly covert a image quality from low to high.</p>
                <button onclick="location.href='imageenhancer.php'" class="btn">Use Now</button>
            </div>
            <div class="hero-image">
                <img src="Images/Cms.jpg" alt="about">
            </div>
        </div>
    </section>

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

        <!-- <script>
            function removebg() {
                const url ='removebg.php';

            }
        </script> -->
</body>
</html>