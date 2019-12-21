<?php
include('Common.php');

outputHeader("Asteroids Breaker");
?>

<!-- Header tag -->
<header>
    <!-- Navigation Bar -->
    <div class="top-nav-bar">
        <?php
        outputNavigationBar();

        outputLogo();
        ?>
    </div>
</header>

<!-- Page Content -->
<div class="page-content">
    <!-- Top section -->
    <div class="title">
        <h3>Asteroids Breaker</h3>
        <p>
            Welcome to the Asteroids Breaker game where the adventure starts in
            space. Your mission, as the spaceship<br>commander, is to protect
            and destroy any incoming asteroids by using the machine gun.<br>Be
            cautious not to destroy the spaceship.<br>Good Luck Commander!
        </p>

        <!-- Line to separate paragraph and play button. -->
        <div class="line-seperator">
            <hr />
        </div>

        <!-- Play button -->
        <div class="play">
            <p style="font-size: 20px;"> Click the button below to play!</p>
            <p style="font-size: 18px">Note: User must be logged in to play.</p>
            <a class="play-button" href="../PHP/Login.php"></a>
        </div>
    </div>

    <!-- Main Features -->
    <div class="main-features" id="main-features">
        <h3>Main Features</h3>
        <p>The main features of the Asteroid breaker game.</p>
        <div class="features">
            <!-- Feature One -->
            <div class="feature-one">
                <div class="feature-icon">
                    <span><i class="far fa-check-circle"></i></span>
                </div>
                <div class="feature-text">
                    <span>Feature One</span>
                </div>
                <p>Spaceship is able to shoot lasers to destroy asteroids.</p>
            </div>

            <!-- Feature Two -->
            <div class="feature-two">
                <div class="feature-icon">
                    <span><i class="far fa-check-circle"></i></span>
                </div>
                <div class="feature-text">
                    <span>Feature Two</span>
                </div>
                <p>Asteroids break into smaller pieces after being destroyed.</p>
            </div>

            <!-- Feature Three -->
            <div class="feature-three">
                <div class="feature-icon">
                    <span><i class="far fa-check-circle"></i></span>
                </div>
                <div class="feature-text">
                    <span>Feature Three</span>
                </div>
                <p>Spaceship has only four lifes available in the game.</p>
            </div>
        </div>
    </div>

    <!-- Line to separate divs. -->
    <div class="full-line-seperator">
        <hr />
    </div>

    <!-- Gameplay Gallery -->
    <div class="gameplay-gallery">
        <h3>Gameplay Gallery</h3>
        <div class="slideshow">
            <!-- Image number 1. -->
            <div class="images fade">
                <div class="number-text">1 / 3</div>
                <img src="../Img/One.png" alt="Gameplay_1">
                <div class="caption">Image 1</div>
            </div>

            <!-- Image number 2-->
            <div class="images fade">
                <div class="number-text">2 / 3</div>
                <img src="../Img/Two.png" alt="Gameplay_2">
                <div class="caption">Image 2</div>
            </div>

            <!-- Image number 3-->
            <div class="images fade">
                <div class="number-text">3 / 3</div>
                <img src="../Img/Three.png" alt="Gameplay_3">
                <div class="caption">Image 3</div>
            </div>
        </div>
    </div>
    <br>

    <!-- Shows the dots at the bottom of the slideshow images. -->
    <div style="text-align: center; padding-bottom: 15px;">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <!-- Get In Touch section -->
    <div class="get-in-touch" id="get-in-touch">
        <h3>Get In Touch</h3>
        <p>
            Please send us your reviews about the game or if you are having any issues. You
            can also suggest options of how<br>the game can be improved or if new features
            should be added to make the gaming experience better.<br>Thank you!
        </p>

        <!-- Show a form for users -->
        <div class="contact">
            <form>
                <textarea id="message" name="message" placeholder="Enter message here..." required></textarea>
                <br>
                <input type="email" id="email" name="email-address" placeholder="Email Address" required>
                <input type="text" id="name" name="full-name" placeholder="Full Name" required>
                <button type="submit" class="submit-button"><i class="fas fa-paper-plane"></i> Submit</button>
            </form>
        </div>
    </div>

    <?php
    outputFooter();
    ?>

    <!-- Script for images slideshow. -->
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("images");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3500); // Change image every 3.5 seconds
        }
    </script>
    <script type="text/javascript" src="../Javascript/AccessGame.js"></script>
</div>

<!-- Outputs the closing tag of body and html. -->
<?php
outputFooterEnd();
?>