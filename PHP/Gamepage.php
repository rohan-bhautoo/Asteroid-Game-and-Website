<?php
include('Common.php');

outputHeader("Play Asteroids Breaker");
?>

<!-- Header tag -->
<header>
    <!-- Navigation Bar -->
    <div class="top-nav-bar">
        <?php
        outputNavigationBar();
        ?>
    </div>
</header>

<!-- Game-page -->
<div class="game-page">
    <div class="game-content">
        <!-- Background Video -->
        <div class="video-container">
            <div class="color-overlay">
                <video autoplay loop muted>
                    <source src="../Video/stars.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <!-- Game Scene -->
        <div class="game-scene" align="left">
            <canvas id="gameCanvas" width="900" height="800">

            </canvas>
        </div>

        <!-- Instructions -->
        <div class="instructions">
            <h3>Instructions</h3>
            <ol>
                <li>
                    1. Use arrow keys(←, ↑, →) to move ship.
                    Tip: Hold key for greater speed.
                </li>
                <li>2. Press spacebar to shoot lasers.</li>
                <li>3. Destroy all asteroids to move to the <br> next level. <br>
                    Tip: Destroy smaller asteroids to obtain higher scores.
                </li>
                <li>4. Lifes are shown in the top-left corner.</li>
            </ol>
        </div>

        <!-- Script for the game. -->
        <script src="../Javascript/Asteroids.js"></script>
    </div>

    <?php
    outputFooter();
    ?>
</div>

<!-- Outputs the closing tag of body and html. -->
<?php
outputFooterEnd();
?>