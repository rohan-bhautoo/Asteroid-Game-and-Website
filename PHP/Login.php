<?php

    include('Common.php');

    outputHeader("Login");

?>

<!-- Header -->
<header>
    <!-- Navigation Bar -->
    <div class="top-nav-bar">
        <?php 
            outputNavigationBar();
        ?>
    </div>
</header>

<!-- Contents of login page. -->
<div class="login-page-content">
    <div class="login-form">

        <!-- Logo image -->
        <div class="login-image">
            <img src="../Img/LoginLogo.png" alt="login image">
        </div>

        <!-- Login form -->
        <div class="login-content">
            <h3>Member Login</h3>

            <!-- Username input -->
            <div>
                <input type="text" id="login_username" name="login_username" placeholder="Username" required>
            </div>

            <!-- Password input -->
            <div>
                <input type="password" id="login_password" name="login_password" placeholder="Password" required>
            </div>

            <!-- Login button -->
            <div>
                <button type="submit" class="login_button" id="login_button" onclick="login()">Login</button>
            </div>

            <!-- Link to register page. -->
            <div class="to-register">
                <p>Create your account <a href="Register.php">here</a>.</p>
            </div>
        </div>
    </div>

    <?php 
        outputFooter();
    ?>

    <script type="text/javascript" src="../Javascript/Login.js"></script>
</div>

<?php 
    outputFooterEnd();
?>