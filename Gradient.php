    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Gradient Generator</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Gradient.css">
    </head>
    <body>
        <!-- header Starts -->
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

        <div class="pallete">
            <div class="main">
            <div class="heading">
                <i class="fa-solid fa-swatchbook"></i>
                <h1>Gradient Generator</h1>
            </div>
            </div>
        </div>
        <div class="g-pallete">
        <div class="gradient_container">
            <div class="colors">
                <input type="color" id="color-a" value="#1488cc">
                <input type="color" id="color-b" value="#2b32b2">
            </div>
            <div class="buttons">
                <button onclick="setDirection('to top',this)">
                    <i class="fas fa-arrow-up"></i>
                </button>
                <button class="active" onclick="setDirection('to bottom',this)">
                    <i class="fas fa-arrow-down"></i>
                </button>
                <button onclick="setDirection('to right',this)">
                    <i class="fas fa-arrow-right"></i>
                </button>
                <button onclick="setDirection('to left',this)">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button class="rotate-icon" onclick="setDirection('to top right',this)">
                    <i class="fas fa-arrow-up"></i>
                </button>
                <button class="rotate-icon" onclick="setDirection('to bottom left',this)">
                    <i class="fas fa-arrow-down"></i>
                </button>
                <button class="rotate-icon" onclick="setDirection('to bottom right',this)">
                    <i class="fas fa-arrow-right"></i>
                </button>
                <button class="rotate-icon" onclick="setDirection('to top left',this)">
                    <i class="fas fa-arrow-left"></i>
                </button>
            </div>
            <button id="submit" onclick="generateCode()">Generate</button>
            <div class="output">
                <textarea id="code" rows="2"></textarea>
                <button id="copy" onclick="copyText()">Copy</button>
            </div>
        </div>
    </div>

    <div class="other-tools">
        <h2>Explore Our Free Tools</h2>
        <p>Make your pictures pop with features that are completely free</p>
    <div class="card-list">
        <a href="#" class="card-item">
            <img src="Images/cms.jpg" alt="Card Image">
            <span onclick="location.href='imageenhancer.php'" class="tool-btn">Image Enhancer</span>
            <h4>It can be used to enhance your pixilated images.</h4>
        </a>
        <a href="#" class="card-item">
            <img src="Images/QR.jpg" alt="Card Image">
            <span onclick="location.href='QRcode.php'" class="tool-btn">QR Code Generator</span>
            <h4>It helps to convert link into QR Code to upload on images.</h4>
        </a>
        <a href="#" class="card-item">
            <img src="Images/bgr.jpg" alt="Card Image">
            <span onclick="location.href='removebg.php'" class="tool-btn">Remove Background</span>
            <h4>It helps you to remove your image's background instantly.</h4>
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

        <!--Script-->
        <script src="Gradient.js"></script>
    </body>
    </html>