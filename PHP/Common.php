<?php

/**
 *
 * Output the header of the page and the opening body tag.
 *
 * @param string $title The title of the selected page.
 *
 */
function outputHeader($title)
{
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<! Link to external stylesheet -->';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Home.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Leaderboards.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Register.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Login.css">';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/Gamepage.css">';
    echo '<link rel="stylesheet" href="../CSS/all.css">';
    echo '<link rel="stylesheet" href="../CSS/fontawesome.min.css">';
    echo '</head>';
    echo '<body>';
}

/**
 *
 * Outputs the navigation bar.
 *
 */
function outputNavigationBar()
{
    // Opening div of navigation class which is 'navBarInner'.
    echo '<div class="nav-bar-inner">';
    echo '<ul class="main-menu">';

    // Link array of pages to addresses.
    $linkNames = array("Home", "Features", "Leaderboards", "Get-In-Touch", "Register", "Login");
    $linkAddresses = array("Home.php", "Home.php#main-features", "Leaderboards.php", "Home.php#get-in-touch", "Register.php", "Login.php");

    // Outputs navigation.
    for ($x = 0; $x < count($linkNames); $x++) {
        echo '<li><a ';
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li>';
    }


    echo '</ul>';
    echo '</div>';
    echo '<a style="float:left"></a>';
}

/**
 *
 * Outputs the logo on the home page.
 *
 */
function outputLogo()
{
    echo '<div class="logo">';
    echo '<img src="../Img/Logo.png" alt="Asteroids Logo">';
    echo '</div>';
}

/**
 *
 * Outputs the footer and its information like Social media icons and user details.
 *
 */
function outputFooter()
{
    // Opening tag of footer and div.
    echo '<footer>';
    echo '<div class="footer">';

    // Use icons for each user details.
    $user = array(" Bhautoo Rohan", " M00679106", " Middlesex University Mauritius, Flic-en-Flacq", " +230 51234567");
    $userIcon = array("user-tie", "barcode", "map-marker-alt", "phone-alt");

    // Output icons.
    for ($i = 0; $i < count($userIcon); $i++) {
        echo '<p><i class="fas fa-' . $userIcon[$i] . '"></i>' . $user[$i] . '</p>';
    }

    // Outputs a line between user details and social media.
    echo '<div class="line-seperator-bottom">';
    echo '<hr/>';
    echo '</div>';

    // Array of social media icons.
    $socialMedia = array("facebook-f", "twitter", "instagram", "pinterest-p");

    // Outputs social media icons.
    echo '<div class="social-button">';
    for ($s = 0; $s < count($socialMedia); $s++) {
        echo '<i class="fab fa-' . $socialMedia[$s] . '"></i>';
    }

    echo '</div>';
    echo '</div>';
    echo '</footer>';

    echo '<script type="text/javascript" src="../Javascript/CheckLogin.js"></script>';
}

/**
 * 
 * Outputs the closing tag of body and html.
 * 
 */
function outputFooterEnd()
{
    echo '</body>';
    echo '</html>';
}
