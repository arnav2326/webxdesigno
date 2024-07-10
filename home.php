
<?php 
include('partials/headerNew.php');
?> 
    
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
                <li><a class="active" href="home.php" >Home</a></li>
                <li><a href="templates.php">Templates</a></li>
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

    <!-- Hero Section Starts -->
    <div class="box">
        <div class="hero">
            <div class="content">
                <h1>Let's Redesign the World!</h1>
                <p>All Your Design Needs at One Place...</p>
                <a href="login.php" class="btn">Get Started</a>
            </div>
        </div>
    </div>
    <!-- Hero Section Ends -->


    <!-- Cardholder Starts -->
    <div class="box2">
        <h2>Templates</h2>
    </div>
    <div class="services">
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
        <li class="card">
            <div class="img"><img src="images/logo2.png" alt="img" draggable="false"></div>
            <h2>Logo</h2>
            <a href="logo.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/brochure.png" alt="img" draggable="false"></div>
            <h2>Brochures</h2>
            <a href="brochure.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/Flyer.png" alt="img" draggable="false"></div>
            <h2>Flyers</h2>
            <a href="flyer.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/letterhead.png" alt="img" draggable="false"></div>
            <h2>Letterhead</h2>
            <a href="letterhead.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/vc.png" alt="img" draggable="false"></div>
            <h2>Visiting Card</h2>
            <a href="vc.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/poster.png" alt="img" draggable="false"></div>
            <h2>Poster</h2>
            <a href="poster.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/invitation.png" alt="img" draggable="false"></div>
            <h2>Invitation</h2>
            <a href="invitation.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/post.png" alt="img" draggable="false"></div>
            <h2>Digital Post</h2>
            <a href="instaposts.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/resume.png" alt="img" draggable="false"></div>
            <h2>Resume</h2>
            <a href="cv.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/webpage.png" alt="img" draggable="false"></div>
            <h2>Webpage</h2>
            <a href="web.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/certificate.png" alt="img" draggable="false"></div>
            <h2>Certificate</h2>
            <a href="certificate.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/gift.png" alt="img" draggable="false"></div>
            <h2>Gift Card</h2>
            <a href="giftcard.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/postcard.png" alt="img" draggable="false"></div>
            <h2>Postcard</h2>
            <a href="poster.php" class="btn">View More</a>
        </li>
        <li class="card">
            <div class="img"><img src="images/ions.png" alt="img" draggable="false"></div>
            <h2>Icons</h2>
            <a href="icons.php" class="btn">View More</a>
        </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
</div>
    <!-- Cardholder Ends -->

        <!-- Services Starts -->
        <section class="Overview">
            <h2 class="section-heading">Our Services</h2>
        <div class="row">
            <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-image"></i>
                </div>
                <h3>Templates</h3>
                <p>
                    Design templates are pre-made designs and documents that can be customized and they consistent between users and mediums.
                </p>
            </div>
            </div>
            <div class="column">
                
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-paintbrush"></i>
                </div>
                <h3>Tools</h3>
                <p>
                Tools are the products which allows  designers to efficiently brainstorm, create, edit and share their designs with clients.
                </p>
            </div>
            </div>
            <div class="column">
            <div class="card">
                <div class="icon-wrapper">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <h3>Designer</h3>
                <p>
                Customers can hire a designer for their custom graphic by givng requirements and pay them as per the designs
                </p>
            </div>
            </div>
        </section>
    <!-- Services Ends -->

<!-- About Starts -->

<section class="about">
    <div class="about-heading">
        <h2>About Us</h2>
    </div>
    <div class="about-container">
        <div class="about-content">
            <h2>Welcome to WebXDesigno</h2>
            <p>We are an online graphic design platform that offers a user-friendly 
                interface to create various designs, from social media graphics and presentations 
                to posters and flyers. </p>
            <button onclick="location.href='register.php'" >Sign up Now</button>
        </div>
        <div class="about-image">
            <img src="logo-no-bg.png" alt="about">
        </div>
    </div>
</section>
<!-- About Ends -->

<!-- Contact Us starts-->
<div class="contact">
    <div class="contact-heading">
        <h2>Contact Us</h2>
    </div>
    <div class="contact-info">
        
        <div class="contact-card">
            <div class="card-icon">
                <i  onclick="location.href='mailto:webxdesigno@gmail.com'"  class="fa-solid fa-envelope"></i>
            </div>
            <p>webxdesigno@gmail.com</p>
        </div>
    
        <div class="contact-card">
            <div class="card-icon" >
                <i onclick="location.href='https://wa.me/9324695093'"  class="fa-solid fa-phone"></i>
            </div>
            
            <p>+91 93246 95093</p>
        </div>
    
        <div class="contact-card">
            <div class="card-icon">
                <i onclick="location.href='https://maps.app.goo.gl/inoTPmoLe9ifEehV8'"  class="fa-solid fa-location-dot"></i>
            </div>
            
            <p>Dombivli East, India</p>
        </div>
    </div>
</div>
<!-- Contact Us Ends-->

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
                <a href="color_Pallete.php" class="link">Color Pallete Generator</a>
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


    <?php 
include('partials/footerNew.php');
?> 