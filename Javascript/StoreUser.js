/**
 *
 * Function to store user information in localStorage.
 *
 */
function storeUser() {
  // Objects to store.
  var usrObject = {};
  usrObject.username = document.getElementById("register_username").value;
  usrObject.gender = document.getElementById("gender").value;
  usrObject.dob = document.getElementById("dob").value;
  usrObject.email = document.getElementById("register_email_address").value;
  usrObject.password = document.getElementById("register_password").value;

  // Store user.
  localStorage[usrObject.username] = JSON.stringify(usrObject);

  // Inform user.
  alert("Registration Successfull!");
}
