<p align="center">
  <img width="30%" height="30%" src="https://github.com/rohan-bhautoo/Asteroid-Game-and-Website/blob/master/Img/Logo.png">
</p>
<h1 align="center">Asteroids Breaker Website ☄️</h1>
<p>
  <img alt="Version" src="https://img.shields.io/badge/version-0.1.5-brightgreen.svg" />
  <img alt="HTML" src="https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white" />
  <img alt="CSS" src="https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white" />
  <img alt="JavaScript" src="https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black" />
  <img alt="PHP" src="https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white" />
  <img alt="Npm" src="https://img.shields.io/badge/npm->=8.3.1-blue.svg" />
  <img alt="Node" src="https://img.shields.io/badge/node->=16.14.0-blue.svg" />
</p>

## Description
> The Asteroids Breaker website enables users to register, login and to play an Asteroid game. Each user will have a unique username which will be verified during registration. The scores of each user will be updated and placed in the Leaderboards page. Local storage, from the browser, is used in order to store user information and scores. Session storage also ensures which user is currently logged in and to update the home page accordingly. 
> 
> The website and the game was built using HTML, CSS, PHP and JavaScript programming languages. See other images of the website in the [Screenshot](/Screenshots) folder.

### 🏠 [Homepage](/PHP/Home.php)
<p align="center">
  <img height="800px" style="display: block; max-height: 800px; width: auto; height: auto;" src="https://github.com/rohan-bhautoo/Asteroid-Game-and-Website/blob/master/Screenshots/Home.png">
</p>

## Asteroids Breaker
> Asteroids is a space-themed multidirectional shooter game. The player controls a single spaceship in an asteroid field. The object of the game is to shoot and destroy the asteroids, while not colliding with them. The game becomes harder as the number of asteroids increases.
<p align="center">
  <img height="400px" src="https://github.com/rohan-bhautoo/Asteroid-Game-and-Website/blob/master/Screenshots/Play%20Asteroids%20Breaker.png">
</p>

### Starting Position
> The player always starts at the center of the screen on every new game. This is achieved by dividing the canvas width and height by 2. Ths ship's angle is also used to make it face north by using the formula <img src="http://www.sciweavers.org/upload/Tex2Img_1644616985/render.png"> which converts the value to radians. A blinking of 3 seconds is used to make the ship invulnerable to the asteroids. In case where a user respawn in the center of an asteroid. Instead of exploding, the user has time to escape.

### Movements
> The player controls the spaceship which is represented by a triangular object at the center of the screen. The arrow keys, ← ↑ → ↓, on the keyboard are used to control the spaceship. The keyDown() and KeyUp() functions, in the [Asteroids.js](/Javascript/Asteroids.js) script, are used to move the spaceship.

### Asteroids
> The asteroids are created in the update function and stored in an array. Each of them will have a different number of sides and will be moving at different speed by using the Math.random() function. Problem like asteroids appearing on ship when level starts has been solved in the createAsteroidBelt() function where the distBetweenPoints() function creates a radius around the ship. Asteroids will not appear in this radius at the start of the game.

### Destroy Asteroids
> When a laser hits the large asteroids, it breaks down into two smaller pieces. The collision of the ship with the asteroids will also destroy the asteroids. The ASTEROID_SIZE constant is divided by 4 then by 8 in the destroyAsteroid() function. The roids.slice(index, 1) will remove the asteroid from the array. Smaller asteroids have higher score of 100. If all asteroids are destroyed, then a new level will start.

### Levels
> At level 1, the number of asteroids is 3. As the levels increases, the number of asteroids and their speed also increases which makes the game difficult at a certain level. In the createAsteroidBelt() function, the ASTROID_NUM is added with the level and in newAsteroid() the speed is multiplied by (1 + 0.1 * level).

### Collisions
> The collisions are detected when the ships circle collides with the asteroids circle. Then an explosion animation is shown and the life decreases by one.
<p align="center">
  <img height="400px" src="https://github.com/rohan-bhautoo/Asteroid-Game-and-Website/blob/master/Screenshots/Collisions%20Border.png">
</p>

## Prerequisite

### XAMPP
> XAMPP is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use. Download it [here](https://www.apachefriends.org/index.html).

## Run code
> 1 - Open XAMPP
>
> 2 - Start MySQL and Apache servers.
>
> 3 - Verify that the php file is in the htdocs folder (C:/Program Files/XAMPP/htdocs)
> 
> 4 - In your browser, open localhost/PHP/Home.php
<p align="center">
  <img height="300px" src="https://d1jnx9ba8s6j9r.cloudfront.net/blog/wp-content/uploads/2019/07/Xamp-Control-Panel-how-to-run-php-program-Edureka-1.jpg">
</p>

## Usage
> 1 - In order to access the game page, the user need to register a new account or login with an existing account.
> 
> 2 - The game can then be accessed by using the Play button on the home page or on the navigation bar.
> 
> 3 - Each scores will be saved in the Leaderboards page.
<p align="center">
  <img height="400px" src="https://github.com/rohan-bhautoo/Asteroid-Game-and-Website/blob/master/Screenshots/Leaderboards.png">
</p>

## Author

👤 **Rohan Bhautoo**

* Github: [@rohan-bhautoo](https://github.com/rohan-bhautoo)
* LinkedIn: [@rohan-bhautoo](https://linkedin.com/in/rohan-bhautoo)

## Show your support

Give a ⭐️ if this project helped you!
