/**
 *
 * Function for user to login to website.
 *
 */
function login() {
  // Get username and password from login page.
  let username = document.getElementById("login_username").value;
  let password = document.getElementById("login_password").value;

  // Alert user that there are no valid account to login.
  if (localStorage[username] === undefined) {
    alert("Invalid Username");
    return;
  } else {
    // Get existing username from localStorage.
    let usrObj = JSON.parse(localStorage[username]);

    // Check if user's password is correct.
    if (password === usrObj.password) {
      alert("Login Successfull!");
      sessionStorage.loggedInUsername = usrObj.username;
      window.location = "https://localhost/Website/PHP/Home.php";
    } else {
      alert("Incorrect Password! Please try again.");
    }
  }
}
