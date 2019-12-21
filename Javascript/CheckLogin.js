// Loads function when window is accessed.
window.onload = checkLogin();

/**
 *
 * Function to check if user is already logged in.
 *
 */
function checkLogin() {
  if (sessionStorage.loggedInUsername !== undefined) {
    // Extract details of logged in user.
    let usrObj = JSON.parse(localStorage[sessionStorage.loggedInUsername]);

    // Add a new navigation title with username.
    document.getElementsByTagName("a")[6].innerHTML =
      "Hi " + sessionStorage.loggedInUsername;
    document.getElementsByTagName("a")[6].style.backgroundColor =
      "rgba(0, 153, 204, 0.8)";

    // Change register to play and add logout in navigation bar.
    document.getElementsByTagName("li")[4].innerHTML =
      '<a href="Gamepage.php">PLAY!</a>';
    document.getElementsByTagName("li")[4].style.cssFloat = "right";
    document.getElementsByTagName("li")[4].style.backgroundColor = "#666666";
    document.getElementsByTagName("li")[5].innerHTML =
      '<a href="Login.php">Logout</a>';

    // Clear session when user is logging out.
    document.getElementsByTagName("li")[5].onclick = function() {
      alert(sessionStorage.getItem("loggedInUsername") + " is logging out...");
      sessionStorage.clear();
    };
  }
}
